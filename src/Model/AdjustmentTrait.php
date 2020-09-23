<?php

namespace Siganushka\Trader\Model;

trait AdjustmentTrait
{
    private $amount;

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): AdjustmentInterface
    {
        $this->amount = $amount;

        return $this;
    }
}
