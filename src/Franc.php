<?php

namespace App\TddTraining;

final class Franc
{
    public function __construct(private int $amount)
    {
    }

    public function plus(self $addend): self
    {
        return new self($addend->amount + $this->amount);
    }

    public function equals(self $compare): bool
    {
        return $compare->amount === $this->amount;
    }
}