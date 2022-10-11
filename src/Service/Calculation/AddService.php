<?php

namespace App\Service\Calculation;

use Decimal\Decimal;
use App\Service\Calculation\BaseCalculation;

class AddService extends BaseCalculation implements Total
{
    /**
     * @return mixed|string
     */
    public function total(): string
    {
        $total = new Decimal;

        $this->toDecimal();

        foreach ($this->decimals as $decimal) {
            $total = $total->add($decimal);
        }

        return $this->toString($total);
    }
}
