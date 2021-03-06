<?php

namespace Drupal\social_demo\Plugin\DemoContent;

use Drupal\social_demo\DemoNode;

/**
 * Topic Plugin for demo content.
 *
 * @DemoContent(
 *   id = "topic",
 *   label = @Translation("Topic"),
 *   source = "content/entity/topic.yml",
 *   entity_type = "node"
 * )
 */
class Topic extends DemoNode {

  /**
   * {@inheritdoc}
   */
  protected function getEntry(array $item) {
    $entry = parent::getEntry($item);
    $entry['field_content_visibility'] = $item['field_content_visibility'];

    // Load term by name and set to node.
    if (!empty($item['field_topic_type'])) {
      $entry['field_topic_type'] = $this->prepareTopicType($item['field_topic_type']);
    }

    // Load image by uuid and set to node.
    if (!empty($item['image'])) {
      $entry['field_topic_image'] = $this->prepareImage($item['image'], $item['image_alt']);
    }

    // Load attachments to node.
    if (!empty($item['field_files'])) {
      $entry['field_files'] = $this->prepareAttachment($item['field_files']);
    }

    return $entry;
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
   * @param string $name
   *   Term name.
   *
   * @return array|null
   *   Array containing related terms.
   */
  protected function prepareTopicType($name) {
    $value = NULL;
    $terms = $this->termStorage->loadByProperties([
      'name' => $name,
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

}
