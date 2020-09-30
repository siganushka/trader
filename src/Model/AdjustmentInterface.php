<?php

namespace Siganushka\Trader\Model;

/**
 * 调整对象，用于表达可调整的金额，可以为负数.
 *
 * @author siganushka <siganushka@gmail.com>
 */
interface AdjustmentInterface
{
    public function getAmount(): ?int;
}
