<?php

namespace Siganushka\Trader\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait OrderItemCollectionTrait
{
    private $itemsTotal;
    private $items;

    public function __construct()
    {
        $this->itemsTotal = 0;
        $this->items = new ArrayCollection();
    }

    public function getItemsTotal(): int
    {
        return $this->itemsTotal;
    }

    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(OrderItemInterface $item): OrderItemCollectionInterface
    {
        if (!$this->items->contains($item)) {
            $this->items[] = $item;
            $this->recalculateItemsTotal();
        }

        return $this;
    }

    public function removeItem(OrderItemInterface $item): OrderItemCollectionInterface
    {
        if ($this->items->contains($item)) {
            $this->items->removeElement($item);
            $this->recalculateItemsTotal();
        }

        return $this;
    }

    protected function recalculateItemsTotal(): OrderItemCollectionInterface
    {
        $subtotals = $this->items->map(function (OrderItemInterface $item) {
            return $item->getSubtotal();
        });

        $this->itemsTotal = array_sum($subtotals->toArray());

        return $this;
    }
}
