<?php

namespace Siganushka\Trader\Model;

interface VariantInterface
{
    public function getPrice(): ?int;

    public function setPrice(?int $price): self;
}
