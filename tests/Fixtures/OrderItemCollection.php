<?php

namespace Siganushka\Trader\Tests\Fixtures;

use Siganushka\Trader\Model\OrderItemCollectionInterface;
use Siganushka\Trader\Model\OrderItemCollectionTrait;

class OrderItemCollection implements OrderItemCollectionInterface
{
    use OrderItemCollectionTrait;
}
