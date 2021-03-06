<?php

namespace Drupal\social_demo\Plugin\DemoContent;

use Drupal\social_demo\DemoNode;
use Drupal\user\Entity\User;

/**
 * Event Plugin for demo content.
 *
 * @DemoContent(
 *   id = "event",
 *   label = @Translation("Event"),
 *   source = "content/entity/event.yml",
 *   entity_type = "node"
 * )
 */
class Event extends DemoNode {

  /**
   * {@inheritdoc}
   */
  protected function getEntry(array $item) {
    $entry = parent::getEntry($item);

    $entry['field_event_address'] = $item['field_event_address'];
    $entry['field_event_date'] = $this->createEventDate($item['field_event_date']);
    $entry['field_event_date_end'] = $this->createEventDate($item['field_event_date_end']);
    $entry['field_event_location'] = $item['field_event_location'];
    $entry['field_content_visibility'] = $item['field_content_visibility'];

    // Load image by uuid and set to node.
    if (!empty($item['image'])) {
      $entry['field_event_image'] = $this->prepareImage($item['image'], $item['image_alt']);
    }

    // Load attachments to node.
    if (!empty($item['field_files'])) {
      $entry['field_files'] = $this->prepareAttachment($item['field_files']);
    }

    if (\Drupal::moduleHandler()->moduleExists('social_event_type') && !empty($item['field_event_type'])) {
      $entry['field_event_type'] = $this->prepareEventType($item['field_event_type']);
    }

    // Possibility to add event managers (if the module is enabled)
    if (\Drupal::moduleHandler()->moduleExists('social_event_managers') && !empty($item['field_event_managers'])) {
      $entry['field_event_managers'] = $this->prepareEventManagers($item['field_event_managers']);
    }

    return $entry;
  }

  /**
   * Function to calculate the date.
   */
  protected function createEventDate($date_string) {
    // Split from delimiter.
    $timestamp = explode('|', $date_string);

    $date = strtotime($timestamp[0]);
    $date = date('Y-m-d', $date) . 'T' . $timestamp[1] . ':00';

    return $date;

  }

  /**
   * Returns reference to attachment, possibly with a description.
   *
   * @param array $files
   *   Array with UUIDs of files.
   *
   * @return array|null
   *   Array containing related files or NULL.
   */
  protected function prepareAttachment(array $files) {
    $attachments = NULL;

    foreach ($files as $file) {
      $description = '';

      // If it is an array, this means we also have a description.
      if (is_array($file)) {
        $uuid = key($file);
        $description = current($file);
      }
      else {
        $uuid = $file;
      }

      $object = $this->fileStorage->loadByProperties([
        'uuid' => $uuid,
      ]);

      if ($object) {
        $properties = [
          'target_id' => current($object)->id(),
          'description' => $description,
        ];

        $attachments[] = $properties;
      }
    }

    return $attachments;
  }

  /**
   * Returns taxonomy term id.
   *
   * @param string $uuid
   *   The uuid.
   *
   * @return array|null
   *   Returns an array or null.
   */
  protected function prepareEventType($uuid) {
    $value = NULL;
    $terms = $this->termStorage->loadByProperties([
      'uuid' => $uuid,
    ]);

    if ($terms) {
      $value = [
        [
          'target_id' => current($terms)->id(),
        ],
      ];
    }

    return $value;
  }

  /**
   * Returns event managers.
   *
   * @param array $managers
   *   An array of uuids.
   *
   * @return array|null
   *   Returns an array or null.
   */
  protected function prepareEventManagers(array $managers) {
    $values = NULL;

    foreach ($managers as $uuid) {
      // Load the user(s) by the given uuid(s).
      $load = $this->userStorage->loadByProperties(['uuid' => $uuid]);
      $account = current($load);

      if ($account instanceof User) {
        $properties = [
          'target_id' => $account->id(),
        ];

        $values[] = $properties;
      }
    }
    return $values;
  }

}
