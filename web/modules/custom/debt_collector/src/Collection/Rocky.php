<?php

namespace Drupal\debt_collector\Collection;

class Rocky implements DebtCollectorInterface
{
  public function collect(float $owed_amount): float
  {

    return $owed_amount * 0.65;
  }
}
