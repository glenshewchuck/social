<?php

namespace Drupal\social_group\Plugin\Field\FieldWidget;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\InvokeCommand;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Entity\FieldableEntityInterface;
use Drupal\Core\Extension\ModuleHandler;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\select2\Plugin\Field\FieldWidget\Select2EntityReferenceWidget;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\group\Entity\Group;
use Drupal\group\Plugin\GroupContentEnablerManager;
use Drupal\user\Entity\User;
use Drupal\user\UserStorageInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * A widget to select a group when creating an entity in a group.
 *
 * @FieldWidget(
 *   id = "social_group_selector_widget",
 *   label = @Translation("Social group select list"),
 *   field_types = {
 *     "entity_reference",
 *     "list_integer",
 *     "list_float",
 *     "list_string"
 *   },
 *   multiple_values = TRUE
 * )
 */
class SocialGroupSelectorWidget extends Select2EntityReferenceWidget implements ContainerFactoryPluginInterface {

  use StringTranslationTrait;

  /**
   * The list of options.
   *
   * @var array
   *
   * @todo Should be removed after merging patch in the core:
   * https://www.drupal.org/files/issues/2923353-5.patch
   */
  protected $options;

  /**
   * The config factory.
   */
  protected ConfigFactoryInterface $configFactory;

  /**
   * The module handler.
   */
  protected ModuleHandler $moduleHander;

  /**
   * The current user.
   */
  protected AccountProxyInterface $currentUser;

  /**
   * The plugin manager.
   */
  protected GroupContentEnablerManager $pluginManager;

  /**
   * The user entity storage..
   */
  protected UserStorageInterface $userManager;

  /**
   * Creates a SocialGroupSelectorWidget instance.
   *
   * {@inheritdoc}
   */
  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, array $third_party_settings, ConfigFactoryInterface $configFactory, AccountProxyInterface $currentUser, ModuleHandler $moduleHandler, GroupContentEnablerManager $pluginManager, EntityTypeManagerInterface $entity_type_manager) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $third_party_settings);
    $this->configFactory = $configFactory;
    $this->moduleHander = $moduleHandler;
    $this->currentUser = $currentUser;
    $this->pluginManager = $pluginManager;
    $this->entityTypeManager = $entity_type_manager;
    $this->userManager = $entity_type_manager->getStorage('user');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $configuration['third_party_settings'],
      $container->get('config.factory'),
      $container->get('current_user'),
      $container->get('module_handler'),
      $container->get('plugin.manager.group_content_enabler'),
      $container->get('entity_type.manager')
    );
  }

  /**
   * Returns the array of options for the widget.
   *
   * @param \Drupal\Core\Entity\FieldableEntityInterface $entity
   *   The entity for which to return options.
   *
   * @return array
   *   The array of options for the widget.
   */
  protected function getOptions(FieldableEntityInterface $entity) {
    // Must be a node.
    if ($entity->getEntityTypeId() !== 'node') {
      // We only handle nodes. When using this widget on other content types,
      // we simply return the normal options.
      return parent::getOptions($entity);
    }

    // Get the bundle fron the node.
    $entity_type = $entity->bundle();

    /** @var \Drupal\user\Entity\User $account */
    $account = $this->userManager->load($this->currentUser->id());

    // If the user can administer content and groups, we allow them to
    // override this. Otherwise we stick to the original owner.
    if (!$account->hasPermission('administer nodes') && !$account->hasPermission('manage all groups')) {
      $account = $entity->getOwner();
    }

    // Limit the settable options for the current user account.
    $options = $this->fieldDefinition
      ->getFieldStorageDefinition()
      ->getOptionsProvider($this->column, $entity)
      ->getSettableOptions($account);

    // Check for each group type if the content type is installed.
    foreach ($options as $key => $optgroup) {
      // Groups are in the array below.
      if (is_array($optgroup)) {
        // Loop through the groups.
        foreach ($optgroup as $gid => $title) {
          // If the group exists.
          if ($group = Group::load($gid)) {
            // Load all installed plugins for this group type.
            $plugin_ids = $this->pluginManager->getInstalledIds($group->getGroupType());
            // If the bundle is not installed,
            // then unset the entire optiongroup (=group type).
            if (!in_array('group_node:' . $entity_type, $plugin_ids)) {
              unset($options[$key]);
            }
          }
          // We need to check only one of each group type,
          // so break out the second each.
          break;
        }
      }
    }

    // Remove groups the user does not have create access to.
    if (!$account->hasPermission('manage all groups')) {
      $options = $this->removeGroupsWithoutCreateAccess($options, $account, $entity);
    }

    // Add an empty option if the widget needs one.
    if ($empty_label = $this->getEmptyLabel()) {
      $options = ['_none' => $empty_label] + $options;
    }

    $module_handler = $this->moduleHander;
    $context = [
      'fieldDefinition' => $this->fieldDefinition,
      'entity' => $entity,
    ];
    $module_handler->alter('options_list', $options, $context);

    array_walk_recursive($options, [$this, 'sanitizeLabel']);

    // Set required property for the current object.
    // @todo @: Should be removed after https://www.drupal.org/files/issues/2923353-5.patch will be merged in the core.
    /* @see \Drupal\Core\Field\Plugin\Field\FieldWidget\OptionsWidgetBase::getOptions() */
    if (!isset($this->options)) {
      $this->options = $options ?? parent::getOptions($entity);
    }

    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);

    $element['#suffix'] = '<div id="group-selection-result"></div>';
    $element['#ajax'] = [
      'callback' => __CLASS__ . '::validateGroupSelection',
      'effect' => 'fade',
      'event' => 'change',
    ];

    // Unfortunately validateGroupSelection is cast as a static function
    // So I have to add this setting to the form in order to use it later on.
    $default_visibility = $this->configFactory->get('entity_access_by_field.settings')
      ->get('default_visibility');

    $form['default_visibility'] = [
      '#type' => 'value',
      '#value' => $default_visibility,
    ];

    // Disable multi-selection if cross-posting is disabled or current entity
    // type isn't in the allowed list.
    $sg_settings = $this->configFactory->get('social_group.settings');
    $disable_multi_selection = !$this->currentUser->hasPermission('access cross-group posting')
      || !$sg_settings->get('cross_posting.status')
      || !in_array($items->getEntity()->bundle(), $sg_settings->get('cross_posting.content_types'), TRUE);

    if ($disable_multi_selection) {
      $element['#multiple'] = FALSE;
    }

    $change_group_node = $sg_settings->get('allow_group_selection_in_node');
    /** @var \Drupal\Core\Entity\EntityInterface $entity */
    $entity = $form_state->getFormObject()->getEntity();

    // If it is a new node lets add the current group.
    if (!$entity->id()) {
      $current_group = _social_group_get_current_group();
      if (!empty($current_group) && empty($element['#default_value'])) {
        $element['#default_value'] = [$current_group->id()];
      }
    }
    else {
      if (!$change_group_node && !$this->currentUser->hasPermission('manage all groups')) {
        $element['#disabled'] = TRUE;
        $element['#description'] = $this->t('Moving content after creation function has been disabled. In order to move this content, please contact a site manager.');
      }
    }

    // We don't allow to LU to edit field if there are multiple values.
    if (count($element['#default_value']) > 1) {
      if ($sg_settings->get('cross_posting.status') && !$this->currentUser->hasPermission('access cross-group posting')) {
        $element['#disabled'] = TRUE;
        $element['#description'] = $this->t('You are not allowed to edit this field!');
      }
    }

    return $element;
  }

  /**
   * Validate the group selection and change the visibility settings.
   *
   * @param array $form
   *   Form to process.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Form state to process.
   *
   * @return \Drupal\Core\Ajax\AjaxResponse
   *   Response changing values of the visibility field and set status message.
   */
  public static function validateGroupSelection(array $form, FormStateInterface $form_state) {

    $ajax_response = new AjaxResponse();
    $entity = $form_state->getFormObject()->getEntity();

    $selected_visibility = $form_state->getValue('field_content_visibility');
    if (!empty($selected_visibility)) {
      $selected_visibility = $selected_visibility['0']['value'];
    }
    if ($selected_groups = $form_state->getValue('groups')) {
      $allowed_visibility_options = self::getVisibilityOptionsforMultipleGroups(array_column($selected_groups, 'target_id'), $entity);
    }
    else {
      $default_visibility = $form_state->getValue('default_visibility');

      $allowed_visibility_options = social_group_get_allowed_visibility_options_per_group_type(NULL, NULL, $entity);
      $ajax_response->addCommand(new InvokeCommand('#edit-field-content-visibility-' . $default_visibility, 'prop', ['checked', 'checked']));
    }

    foreach ($allowed_visibility_options as $visibility => $allowed) {
      $ajax_response->addCommand(new InvokeCommand('#edit-field-content-visibility-' . $visibility, 'addClass', ['js--animate-enabled-form-control']));
      if ($allowed === TRUE) {
        $ajax_response->addCommand(new InvokeCommand('#edit-field-content-visibility-' . $visibility, 'removeAttr', ['disabled']));
        if (empty($default_visibility) || $visibility === $default_visibility) {
          $ajax_response->addCommand(new InvokeCommand('#edit-field-content-visibility-' . $visibility, 'prop', ['checked', 'checked']));
        }
      }
      else {
        if ($selected_visibility && $selected_visibility === $visibility) {
          $ajax_response->addCommand(new InvokeCommand('#edit-field-content-visibility-' . $visibility, 'removeAttr', ['checked']));
        }
        $ajax_response->addCommand(new InvokeCommand('#edit-field-content-visibility-' . $visibility, 'prop', ['disabled', 'disabled']));
      }

      $ajax_response->addCommand(new InvokeCommand('#edit-field-content-visibility-' . $visibility, 'change'));
    }

    $text = t('Changing the group may have impact on the <strong>visibility settings</strong> and may cause <strong>author/co-authors</strong> to lose access.');

    \Drupal::messenger()->addStatus($text);
    $ajax_response->addCommand(
      new HtmlCommand('#group-selection-result', $text)
    );

    return $ajax_response;
  }

  /**
   * Get content visibility options for multiple groups.
   *
   *  If there are a few groups user should be able to add visibility options
   *  only if the groups have at least one shared option.
   *  F.e, if "Open Group" have only "Public" option and "Secret Group" have
   *  "Only group members" option then user should not be able to save
   *  the entity (because of error).
   *
   * @param array $gids
   *   A list of groups ids.
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The content entity.
   *
   * @return array
   *   A list of visibility options.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  private static function getVisibilityOptionsforMultipleGroups(array $gids, EntityInterface $entity) {
    $groups = \Drupal::entityTypeManager()
      ->getStorage('group')
      ->loadMultiple($gids);

    foreach ($groups as $group) {
      /** @var \Drupal\group\Entity\GroupInterface $group */
      $group_type_id = $group->getGroupType()->id();
      $options[] = social_group_get_allowed_visibility_options_per_group_type($group_type_id, NULL, $entity, $group);
    }

    if (isset($options)) {
      $allowed_visibility_options = [];
      foreach ($options as $item) {
        foreach ($item as $key => $value) {
          if (!isset($allowed_visibility_options[$key])) {
            $allowed_visibility_options[$key] = $value;
          }
          // We always rewrite options if it is "FALSE".
          if (!$value) {
            $allowed_visibility_options[$key] = $value;
          }
        }
      }
    }

    return $allowed_visibility_options ?? [];
  }

  /**
   * Remove options from the list.
   *
   * @param array $options
   *   A list of options to check.
   * @param \Drupal\user\Entity\User $account
   *   The user to check for.
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity to check for.
   *
   * @return array
   *   An list of options for the field containing groups with create access.
   */
  private function removeGroupsWithoutCreateAccess(array $options, User $account, EntityInterface $entity) {

    foreach ($options as $option_category_key => $groups_in_category) {
      if (is_array($groups_in_category)) {
        foreach ($groups_in_category as $gid => $group_title) {
          if (!$this->checkGroupContentCreateAccess($gid, $account, $entity)) {
            unset($options[$option_category_key][$gid]);
          }
        }
        // Remove the entire category if there are no groups for this author.
        if (empty($options[$option_category_key])) {
          unset($options[$option_category_key]);
        }
      }
      else {
        if (!$this->checkGroupContentCreateAccess($option_category_key, $account, $entity)) {
          unset($options[$option_category_key]);
        }
      }
    }

    return $options;
  }

  /**
   * Check if user may create content of bundle in group.
   *
   * @param int $gid
   *   Group id.
   * @param \Drupal\user\Entity\User $account
   *   The user to check for.
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The node bundle to check for.
   *
   * @return int
   *   Either TRUE or FALSE.
   */
  private function checkGroupContentCreateAccess($gid, User $account, EntityInterface $entity) {
    $group = Group::load($gid);

    if ($group->hasPermission('create group_' . $entity->getEntityTypeId() . ':' . $entity->bundle() . ' entity', $account)) {
      if ($group->getGroupType()->id() === 'public_group') {
        $config = $this->configFactory->get('entity_access_by_field.settings');
        if ($config->get('disable_public_visibility') === 1 && !$account->hasPermission('override disabled public visibility')) {
          return FALSE;
        }
      }
      return TRUE;
    }
    return FALSE;
  }

}
