<?php

use App\PrimeNumber;
include_once('app\PrimeNumber.php');

class PrimeNumberTest extends \PHPUnit_Framework_TestCase {

    public function testTwoIsPrime()
    {
        $isPrimeNumber = PrimeNumber::isPrimeNumber(2);
        $this->assertTrue($isPrimeNumber);
    }

    public function testThreeIsPrime()
    {
        $isPrimeNumber = PrimeNumber::isPrimeNumber(3);
        $this->assertTrue($isPrimeNumber);
    }

    public function testFiveIsPrime()
    {
        $isPrimeNumber = PrimeNumber::isPrimeNumber(5);
        $this->assertTrue($isPrimeNumber);
    }

    public function testFourIsNotPrime()
    {
        $isPrimeNumber = PrimeNumber::isPrimeNumber(4);
        $this->assertFalse($isPrimeNumber);
    }

    public function testNineIsNotPrime()
    {
        $isPrimeNumber = PrimeNumber::isPrimeNumber(9);
        $this->assertFalse($isPrimeNumber);
    }

    public function testNegativeOneThrowsException()
    {
        // TODO: Test for exception
    }
}
