<?php

use PHPUnit\Framework\TestCase;

require 'calculator.php';

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $this->assertEquals(10, add(5,5));
    }

    public function testSubtract()
    {
        $this->assertEquals(5, subtract(10,5));
    }

    public function testMultiply()
    {
        $this->assertEquals(20, multiply(4,5));
    }

    public function testDivide()
    {
        $this->assertEquals(5, divide(10,2));
    }
}
