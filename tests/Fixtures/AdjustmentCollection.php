<?php

namespace Siganushka\Trader\Tests\Fixtures;

use Doctrine\Common\Collections\ArrayCollection;
use Siganushka\Trader\Model\AdjustmentCollectionInterface;
use Siganushka\Trader\Model\AdjustmentCollectionTrait;

class AdjustmentCollection implements AdjustmentCollectionInterface
{
    use AdjustmentCollectionTrait;

    public function __construct()
    {
        $this->adjustments = new ArrayCollection();
    }
}
