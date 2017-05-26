<?php


namespace Kata\Test;

use Kata\FizzBuzz;
use Kata\IsNoNumberException;

class KataTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function nothing()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function returnOne()
    {
        $kata = new FizzBuzz();
        $result = $kata->getReplacement(1);
        $this->assertEquals(1, $result);
    }

    /** @test */
    public function returnParam()
    {
        $kata = new FizzBuzz();
        $result = $kata->getReplacement(2);
        $this->assertEquals(2, $result);
    }

    /** @test */
    public function sendThreeReturnFizz()
    {
        $kata = new FizzBuzz();
        $result = $kata->getReplacement(3);
        $this->assertEquals("Fizz", $result);
    }

    /** @test */
    public function sendFiveReturnBuzz()
    {
        $kata = new FizzBuzz();
        $result = $kata->getReplacement(5);
        $this->assertEquals("Buzz", $result);
    }

    /** @test */
    public function sendFifteenReturnFizzBuzz()
    {
        $kata = new FizzBuzz();
        $result = $kata->getReplacement(15);
        $this->assertEquals("FizzBuzz", $result);
    }


    /** @test */
    public function exceptionNexInstance()
    {
        $exceprion = new IsNoNumberException();
        $this->assertInstanceOf(IsNoNumberException::class, $exceprion);

    }

    /** @test
     */
    public function sendStringReturnException()
    {
        $kata = new FizzBuzz();
        $this->setExpectedException(IsNoNumberException::class);
        $kata->getReplacement("hola");

    }


}
