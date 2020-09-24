<?php

namespace Siganushka\Trader\Tests\Model;

use PHPUnit\Framework\TestCase;
use Siganushka\Trader\Tests\Fixtures\OrderItem;
use Siganushka\Trader\Tests\Fixtures\OrderItemCollection;
use Siganushka\Trader\Tests\Fixtures\Variant;

class OrderItemCollectionTraitTest extends TestCase
{
    /**
     * @dataProvider getMockItems
     *
     * @return void
     */
    public function testAll()
    {
        $collection = new OrderItemCollection();
        $this->assertSame(0, $collection->getItemsTotal());
        $this->assertCount(0, $collection->getItems());

        $arguments = \func_get_args();
        $itemsTotal = array_pop($arguments);

        foreach ($arguments as $price) {
            $variant = new Variant();
            $variant->setPrice($price);

            $item = new OrderItem();
            $item->setVariant($variant);
            $item->setQuantity(1);

            $collection->addItem($item);
        }

        $this->assertSame($itemsTotal, $collection->getItemsTotal());
        $this->assertCount(\count($arguments), $collection->getItems());
    }

    public function getMockItems()
    {
        return [
            [0, 3, 3],
            [7, 0, 7],
            [10, 1, 11],
            [20, 5, 25],
            [50, 100, 350, 0, 500],
            [100, 1, 12, 113],
        ];
    }
}
