<?php

namespace Drupal\debt_collector\Collection;

/**
 * Interface for debt collectors.
 */
interface DebtCollectorInterface {
  /**
   * Method to collect debt.
   */
  public function collect(float $owed_amount): float;
}
