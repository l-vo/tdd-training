<?php

namespace App\TddTraining;

final class MoneyFactory
{
    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);
    }
}