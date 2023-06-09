<?php

namespace App\TddTraining\Tests;

use App\TddTraining\Dollar;
use PHPUnit\Framework\TestCase;

final class MoneyTest extends TestCase
{
    public function testEquals(): void
    {
        $dollar = new Dollar(5);
        $this->assertTrue($dollar->equals(new Dollar(5)));
        $this->assertFalse($dollar->equals(new Dollar(6)));
    }

    public function testSimpleAddition(): void
    {
        $dollar = new Dollar(6);
        $dollar = $dollar->plus(new Dollar(6));

        $this->assertTrue($dollar->equals(new Dollar(12)));
    }
}