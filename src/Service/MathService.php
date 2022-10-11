<?php

namespace App\Service;

use App\Service\Calculation\AddService;
use App\Service\Calculation\MultiplyService;
use App\Service\Calculation\SubtractService;
use Decimal\Decimal;

class MathService
{
    /**
     * @param mixed ...$numbers
     *
     * @return mixed|string
     */
    public function add(...$numbers)
    {
        $add = new AddService(...$numbers);

        return $add->total();
    }

    /**
     * @param $a
     * @param $b
     *
     * @return string
     */
    public function subtract($a, $b)
    {
        $sub = new SubtractService($a, $b);

        return $sub->total();
    }

    /**
     * @param $a
     * @param $b
     *
     * @return string
     */
    public function multiply($a, $b)
    {
        $sub = new MultiplyService($a, $b);

        return $sub->total();
    }
}
