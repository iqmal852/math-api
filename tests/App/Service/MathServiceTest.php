<?php

namespace Tests\App\Service;

use App\Service\MathService;
use PHPUnit\Framework\TestCase;

class MathServiceTest extends TestCase
{
    public function testMathAddMethod()
    {
        $mathService = new MathService();

        $this->assertIsString($mathService->add(15, 20));
        $this->assertEquals('35', $mathService->add(15, 20));
        $this->assertIsNotObject($mathService->add(15, 20));
        $this->assertEquals(35, $mathService->add(5, 10, 20));
        $this->assertIsString($mathService->add('12345654789723489823795283405', '0.123172386178236182361823'));
        $this->assertEquals('12345654789723489823795283405.123172386178236182361823',
            $mathService->add('12345654789723489823795283405', '0.123172386178236182361823'));
    }

    public function testMathSubtractMethod()
    {
        $mathService = new MathService();

        $this->assertIsString($mathService->subtract(30, 20));
        $this->assertEquals(-5, $mathService->subtract(15, 20));
        $this->assertIsNotObject($mathService->subtract(50, 20));
        $this->assertEquals(20, $mathService->subtract(50, 30));
        $this->assertSame('70', $mathService->subtract(100, 30));
    }

    public function testMathMultiplyMethod()
    {
        $mathService = new MathService();

        $this->assertIsString($mathService->multiply(30, 20));
        $this->assertEquals(300, $mathService->multiply(15, 20));
        $this->assertIsNotObject($mathService->multiply(50, 20));
        $this->assertSame('1500', $mathService->multiply(50, 30));
    }
}
