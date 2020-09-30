<?php

namespace Siganushka\Trader\Model;

/**
 * 商品接口，任何实现了此接口的对象，都可以被当作商品来售卖.
 *
 * @author siganushka <siganushka@gmail.com>
 */
interface VariantInterface
{
    public function getPrice(): ?int;
}
