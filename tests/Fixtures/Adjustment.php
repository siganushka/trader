<?php

declare(strict_types=1);

namespace Siganushka\Trader\Tests\Fixtures;

use Siganushka\Trader\Model\AdjustmentInterface;
use Siganushka\Trader\Model\AdjustmentTrait;

class Adjustment implements AdjustmentInterface
{
    use AdjustmentTrait;
}
