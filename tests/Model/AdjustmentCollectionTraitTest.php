<?php

namespace Siganushka\Trader\Tests\Model;

use PHPUnit\Framework\TestCase;
use Siganushka\Trader\Tests\Fixtures\Adjustment;
use Siganushka\Trader\Tests\Fixtures\AdjustmentCollection;

class AdjustmentCollectionTraitTest extends TestCase
{
    /**
     * @dataProvider getMockAdjustments
     */
    public function testAll()
    {
        $collection = new AdjustmentCollection();
        $this->assertSame(0, $collection->getAdjustmentsTotal());
        $this->assertCount(0, $collection->getAdjustments());

        $arguments = \func_get_args();
        $adjustmentsTotal = array_pop($arguments);

        foreach ($arguments as $amount) {
            $adjustment = new Adjustment();
            $adjustment->setAmount($amount);
            $collection->addAdjustment($adjustment);
        }

        $this->assertSame($adjustmentsTotal, $collection->getAdjustmentsTotal());
        $this->assertCount(\count($arguments), $collection->getAdjustments());
    }

    public function getMockAdjustments()
    {
        return [
            [-10, 5, 5, -30, -30],
            [3, 3],
            [10, 2, 20, 32],
            [20, 10, 200, 230],
            [50, 9, 450, 509],
            [100, 12, 300, -10, 3, 405],
        ];
    }
}
