<?php

namespace App\TddTraining;

final class MoneyFactory
{
    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Franc
    {
        return new Franc($amount);
    }
}