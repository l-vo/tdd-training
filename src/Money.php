<?php

namespace App\TddTraining;

class Money
{
    public function __construct(private int $amount, private string $currency)
    {
    }

    public function plus(self $addend): self
    {
        return new static($addend->amount + $this->amount, $this->currency);
    }

    public function equals(self $compare): bool
    {
        return $this->currency === $compare->currency && $compare->amount === $this->amount;
    }
}