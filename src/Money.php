<?php

namespace App\TddTraining;

class Money
{
    public function __construct(private int $amount, private string $currency)
    {
    }

    public function plus(self $addend, Bank $bank): self
    {
        $rate = $bank->getRate($addend->currency, $this->currency);

        return new static($addend->amount * $rate + $this->amount, $this->currency);
    }

    public function equals(self $compare, Bank $bank): bool
    {
        $rate = $bank->getRate($compare->currency, $this->currency);

        return intval($compare->amount * $rate) === $this->amount;
    }
}