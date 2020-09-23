<?php

namespace Siganushka\Trader\Model;

interface OrderItemInterface
{
    public function getVariant(): ?VariantInterface;

    public function getUnitPrice(): ?int;

    public function getQuantity(): ?int;

    public function getSubtotal(): int;
}
