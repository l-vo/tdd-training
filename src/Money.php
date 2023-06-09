<?php

namespace App\TddTraining;

abstract class Money
{
    public function __construct(private int $amount)
    {
    }

    public function plus(self $addend): self
    {
        return new static($addend->amount + $this->amount);
    }

    public function equals(self $compare): bool
    {
        return static::class === $compare::class && $compare->amount === $this->amount;
    }
}