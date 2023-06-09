<?php

namespace App\TddTraining;

class Money
{
    public function __construct(private int $amount, private string $currency)
    {
    }

    public function plus(self $addend): self
    {
        if ($this->currency === 'USD' && $addend->currency === 'CHF') {
            $rate = .5;
        } elseif($this->currency === 'CHF' && $addend->currency === 'USD') {
            $rate = 2;
        } else {
            $rate = 1;
        }

        return new static($addend->amount * $rate + $this->amount, $this->currency);
    }

    public function equals(self $compare): bool
    {
        return $this->currency === $compare->currency && $compare->amount === $this->amount;
    }
}