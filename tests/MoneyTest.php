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
}