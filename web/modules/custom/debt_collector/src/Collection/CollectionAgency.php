<?php

namespace Drupal\debt_collector\Collection;

class CollectionAgency implements DebtCollectorInterface
{
  public function collect(float $owed_amount): float
  {
    $guaranteed = $owed_amount * 0.5;

    return mt_rand($guaranteed, $owed_amount);
  }
}
