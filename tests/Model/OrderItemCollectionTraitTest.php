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
    public function testAll($price, $quantity, $itemsTotal)
    {
        $collection = new OrderItemCollection();
        $this->assertSame(0, $collection->getItemsTotal());
        $this->assertCount(0, $collection->getItems());

        $variant = new Variant();
        $variant->setPrice($price);

        $item = new OrderItem();
        $item->setVariant($variant);
        $item->setQuantity($quantity);

        $collection->addItem($item);
        $this->assertSame($itemsTotal, $collection->getItemsTotal());
        $this->assertCount(1, $collection->getItems());
    }

    public function getMockItems()
    {
        return [
            [0, 3, 0],
            [10, 1, 10],
            [20, 5, 100],
            [50, 100, 5000],
            [100, 1, 100],
        ];
    }
}
