<?php

namespace Siganushka\Trader\Model;

interface AdjustmentInterface
{
    public function getAmount(): ?int;

    public function setAmount(?int $amount): self;
}
