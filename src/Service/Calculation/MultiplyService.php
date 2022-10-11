<?php

namespace App\Service\Calculation;

use Decimal\Decimal;
use App\Service\Calculation\BaseCalculation;

class MultiplyService extends BaseCalculation implements Total
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
                $total = $total->mul($decimal);
            } else {
                $total = $decimal;
            }
        }

        return $this->toString($total);
    }
}
