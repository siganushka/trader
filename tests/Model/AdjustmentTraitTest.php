<?php

namespace Siganushka\Trader\Tests\Model;

use PHPUnit\Framework\TestCase;
use Siganushka\Trader\Tests\Fixtures\Adjustment;

class AdjustmentTraitTest extends TestCase
{
    public function testAll()
    {
        $adjustment = new Adjustment();
        $this->assertNull($adjustment->getAmount());

        $adjustment->setAmount(1024);
        $this->assertSame(1024, $adjustment->getAmount());

        $adjustment->setAmount(null);
        $this->assertNull($adjustment->getAmount());
    }
}
