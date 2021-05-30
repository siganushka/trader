<?php

declare(strict_types=1);

namespace Siganushka\Trader\Tests\Fixtures;

use Siganushka\Trader\Model\OrderItemInterface;
use Siganushka\Trader\Model\OrderItemTrait;

class OrderItem implements OrderItemInterface
{
    use OrderItemTrait;
}
