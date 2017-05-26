<?php


namespace Kata\Test;

use Kata\Kata;

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
        $kata = new Kata();
        $result = $kata->execute(1);
        $this->assertEquals(1, $result);
    }

    /** @test */
    public function returnParam()
    {
        $kata = new Kata();
        $result = $kata->execute(2);
        $this->assertEquals(2, $result);
    }

    /** @test */
    public function sendThreeReturnFizz(){
        $kata = new Kata();
        $result = $kata->execute(3);
        $this->assertEquals("Fizz", $result);
    }
}
