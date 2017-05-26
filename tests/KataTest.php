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
}
