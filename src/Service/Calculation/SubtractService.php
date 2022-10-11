<?php

namespace App\Service\Calculation;

use Decimal\Decimal;
use App\Service\Calculation\BaseCalculation;

class SubtractService extends BaseCalculation implements Total
{
    /**
     * @return string
     */
    public function total(): string
    {
        $total = 0;

        $this->toDecimal();

        foreach ($this->decimals as $decimal) {
            if ($total instanceof Decimal) {
                $total = $total->sub($decimal);
            } else {
                $total = $decimal;
            }
        }

        return $this->toString($total);
    }
}
