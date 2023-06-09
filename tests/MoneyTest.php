<?php

namespace App\TddTraining\Tests;

use App\TddTraining\Bank;
use App\TddTraining\MoneyFactory;
use PHPUnit\Framework\TestCase;

final class MoneyTest extends TestCase
{
    private Bank $bank;

    protected function setUp(): void
    {
        $this->bank = new Bank();
        $this->bank->addRate('USD', 'CHF', 2);
        $this->bank->addRate('CHF', 'USD', .5);
    }

    public function testEquals(): void
    {
        $dollar = MoneyFactory::dollar(5);
        $this->assertTrue($dollar->equals(MoneyFactory::dollar(5), $this->bank));
        $this->assertFalse($dollar->equals(MoneyFactory::dollar(6), $this->bank));
        $this->assertFalse($dollar->equals(MoneyFactory::franc(5), $this->bank));
        $this->assertTrue($dollar->equals(MoneyFactory::franc(10), $this->bank));
    }

    public function testSimpleDollarAddition(): void
    {
        $dollar = MoneyFactory::dollar(6);
        $dollar = $dollar->plus(MoneyFactory::dollar(6), $this->bank);

        $this->assertTrue($dollar->equals(MoneyFactory::dollar(12), $this->bank));
    }

    public function testSimpleFrancAddition(): void
    {
        $franc = MoneyFactory::franc(6);
        $franc = $franc->plus(MoneyFactory::franc(6), $this->bank);

        $this->assertTrue($franc->equals(MoneyFactory::franc(12), $this->bank));
    }

    public function testMixedAddition(): void
    {
        $dollar = MoneyFactory::dollar(6);
        $dollar = $dollar->plus(MoneyFactory::franc(6), $this->bank);
        $this->assertTrue($dollar->equals(MoneyFactory::dollar(9), $this->bank));

        $franc = MoneyFactory::franc(6);
        $franc = $franc->plus(MoneyFactory::dollar(6), $this->bank);
        $this->assertTrue($franc->equals(MoneyFactory::franc(18), $this->bank));
    }
}