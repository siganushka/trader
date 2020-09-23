<?php

namespace Siganushka\Trader\Tests\Model;

use PHPUnit\Framework\TestCase;
use Siganushka\Trader\Tests\Fixtures\Variant;

class VariantTraitTest extends TestCase
{
    /**
     * @dataProvider validPriceProvider
     */
    public function testAll($price, $intPrice)
    {
        $variant = new Variant();
        $this->assertNull($variant->getPrice());

        $variant->setPrice($price);
        $this->assertSame($intPrice, $variant->getPrice());
    }

    public function testPriceLessThanZeroException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The price cannot be less than zero.');

        $variant = new Variant();
        $variant->setPrice(-10);
    }

    public function validPriceProvider()
    {
        return [
            [null, null],
            ['0', 0],
            [16, 16],
            ['65535', 65535],
            [PHP_INT_MAX, PHP_INT_MAX],
        ];
    }
}
