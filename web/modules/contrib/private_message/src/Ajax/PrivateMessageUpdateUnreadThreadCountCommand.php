<?php

namespace Drupal\private_message\Ajax;

use Drupal\Core\Ajax\CommandInterface;

class PrivateMessageUpdateUnreadThreadCountCommand implements CommandInterface {

  /**
   * The number of unread threads
   *
   * @var int
   */
  protected $unreadThreadCount;

  /**
   * Construct a PrivateMessageMembersAutocompleteResponseCommand object
   *
   * @param int $unreadThreadCount
   *   The number of unread threads
   */
  public function __construct($unreadThreadCount) {
    $this->unreadThreadCount = $unreadThreadCount;
  }

  /**
   * {@inheritdoc}
   */
  public function render() {
    return [
      'command' => 'privateMessageUpdateUnreadThreadCount',
      'unreadThreadCount' => $this->unreadThreadCount,
    ];
  }
}
