<?php

namespace Siganushka\Trader\Tests\Model;

use PHPUnit\Framework\TestCase;
use Siganushka\Trader\Tests\Fixtures\OrderItem;
use Siganushka\Trader\Tests\Fixtures\Variant;

class OrderItemTraitTest extends TestCase
{
    /**
     * @dataProvider validItemProvider
     */
    public function testAll($price, $quantity, $subtotal)
    {
        $variant = new Variant();
        $variant->setPrice($price);

        $item = new OrderItem();
        $this->assertNull($item->getVariant());
        $this->assertNull($item->getUnitPrice());
        $this->assertNull($item->getQuantity());
        $this->assertSame(0, $item->getSubtotal());

        $item->setVariant($variant);
        $item->setQuantity($quantity);

        $this->assertSame($variant, $item->getVariant());
        $this->assertSame($price, $item->getUnitPrice());
        $this->assertSame($quantity, $item->getQuantity());
        $this->assertSame($subtotal, $item->getSubtotal());
    }

    public function testQuantityLessThanOrEqualZeroException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The quantity cannot be less than or equal to zero.');

        $item = new OrderItem();
        $item->setQuantity(-1);
    }

    public function validItemProvider()
    {
        return [
            [0, 3, 0],
            [10, 1, 10],
            [20, 10, 200],
            [50, 9, 450],
            [100, 12, 1200],
        ];
    }
}
