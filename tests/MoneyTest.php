<?php

namespace App\TddTraining\Tests;

use App\TddTraining\MoneyFactory;
use PHPUnit\Framework\TestCase;

final class MoneyTest extends TestCase
{
    public function testEquals(): void
    {
        $dollar = MoneyFactory::dollar(5);
        $this->assertTrue($dollar->equals(MoneyFactory::dollar(5)));
        $this->assertFalse($dollar->equals(MoneyFactory::dollar(6)));
    }

    public function testSimpleAddition(): void
    {
        $dollar = MoneyFactory::dollar(6);
        $dollar = $dollar->plus(MoneyFactory::dollar(6));

        $this->assertTrue($dollar->equals(MoneyFactory::dollar(12)));
    }
}