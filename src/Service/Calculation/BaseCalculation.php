<?php

namespace App\Service\Calculation;

use Decimal\Decimal;

class BaseCalculation
{
    /**
     * @var array
     */
    public $numbers = [];

    /**
     * @var array
     */
    public $decimals = [];

    /**
     * BaseCalculation constructor.
     *
     * @param mixed ...$numbers
     */
    public function __construct(...$numbers)
    {
        foreach ($numbers as $number) {
            $this->numbers[] = $number;
        }
    }

    /**
     * Converting integer / float / string to decimal format
     * to perform math operation without loss of data
     */
    public function toDecimal()
    {
        $this->decimals = [];
        foreach ($this->numbers as $number) {
            if ($number == null) {
                continue;
            }
            $this->decimals[] = new Decimal($number, 64);
        }
    }

    /**
     * @param Decimal $value
     *
     * @return string
     */
    public function toString(Decimal $value): string
    {
        return $value->toString();
    }
}
