<?php

namespace Siganushka\Trader\Tests\Fixtures;

use Doctrine\Common\Collections\ArrayCollection;
use Siganushka\Trader\Model\OrderItemCollectionInterface;
use Siganushka\Trader\Model\OrderItemCollectionTrait;

class OrderItemCollection implements OrderItemCollectionInterface
{
    use OrderItemCollectionTrait;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }
}
