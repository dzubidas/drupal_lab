<?php

namespace Drupal\block_example\Plugin\Block;

use Drupal\core\Block\BlockBase;

/**
 * Provides a 'Exhibition Info' block.
 *
 * @Block(
 *   id = "block_example",
 *   admin_label = @Translation("Block Example"),
 * )
 */
class BlockExample extends BlockBase {

  public function build()
  {
    return ['#markup' => 'Perfect block!'];
  }
}
