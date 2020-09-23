<?php

namespace Siganushka\Trader\Model;

use Doctrine\Common\Collections\Collection;

interface AdjustmentCollectionInterface
{
    public function getAdjustmentsTotal(): int;

    public function getAdjustments(): Collection;

    public function addAdjustment(AdjustmentInterface $adjustment): self;

    public function removeAdjustment(AdjustmentInterface $adjustment): self;
}
