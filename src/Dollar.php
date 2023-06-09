<?php

namespace App\TddTraining;

final class Dollar
{
    public function __construct(private int $amount)
    {
    }

    public function equals(self $compare): bool
    {
        return $compare->amount === 5;
    }
}