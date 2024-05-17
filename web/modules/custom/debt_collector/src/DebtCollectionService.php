<?php

namespace Drupal\debt_collector;

use Drupal\debt_collector\Collection\DebtCollectorInterface;
use Drupal\debt_collector\Services\DebtorService;

/**
 * Service for handling debt collection.
 */
class DebtCollectionService
{
  protected DebtorService $userService;

  public function __construct(DebtorService $userService) {
    $this->userService = $userService;
  }

  /**
   * Collects debt for a specific user.
   *
   * @param int $user_id
   * @param DebtCollectorInterface $collector
   * @return float
   */
  public function collectDebtForUser(int $user_id, DebtCollectorInterface $collector): float {

    $user = $this->userService->loadUserById($user_id);

    if ($user && !$user->isAnonymous() && $user->hasField('owed_amount') && !$user->get('owed_amount')->isEmpty()) {
      $owed_amount = $user->get('owed_amount')->value;
      return $collector->collect($owed_amount);
    }

    return 0;
  }
  public function collectDebt(DebtCollectorInterface $collector): float
  {
    $owed_amount = mt_rand(100, 1000);

    return $collector->collect($owed_amount);
  }
}
