<?php

namespace App\TddTraining;

final class Bank
{
    private array $rates;

    public function addRate(string $from, string $to, float $rate): void
    {
        $this->rates[$from][$to] = $rate;
    }

    public function getRate(string $from, string $to): float
    {
        return $this->rates[$from][$to] ?? 1;
    }
}