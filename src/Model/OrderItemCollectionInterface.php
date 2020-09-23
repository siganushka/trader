<?php

namespace Siganushka\Trader\Model;

use Doctrine\Common\Collections\Collection;

interface OrderItemCollectionInterface
{
    public function getItemsTotal(): int;

    public function getItems(): Collection;

    public function addItem(OrderItemInterface $item): self;

    public function removeItem(OrderItemInterface $item): self;
}
