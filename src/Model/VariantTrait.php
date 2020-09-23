<?php

namespace Siganushka\Trader\Model;

trait VariantTrait
{
    private $price;

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): VariantInterface
    {
        if (null !== $price && $price < 0) {
            throw new \InvalidArgumentException('The price cannot be less than zero.');
        }

        $this->price = $price;

        return $this;
    }
}
