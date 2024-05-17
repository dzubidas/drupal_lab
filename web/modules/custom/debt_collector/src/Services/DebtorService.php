<?php

namespace Drupal\debt_collector\Services;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Entity\EntityInterface;

class DebtorService {

  /**
   * The entity type manager.
   *
   * @var EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Constructs a new DebtorService object.
   *
   * @param EntityTypeManagerInterface $entity_type_manager
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * Load all users.
   *
   * @return EntityInterface[]
   */
  public function loadAllUsers(): EntityInterface {
    $query = $this->entityTypeManager->getStorage('user')->getQuery()->accessCheck(FALSE);
    $user_ids = $query->execute();

    return $this->entityTypeManager->getStorage('user')->loadMultiple($user_ids);
  }

  public function loadUserById($user_id) {
    return $this->entityTypeManager->getStorage('user')->load($user_id);
  }

}
