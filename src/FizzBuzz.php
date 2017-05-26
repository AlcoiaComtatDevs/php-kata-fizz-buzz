<?php


namespace Kata;

class FizzBuzz
{
    public function getReplacement($param)
    {
        $returnValue = $param;
        if ($param % 3 === 0) {
            $returnValue = 'Fizz';
        }
        if ($param % 5 === 0) {
        $returnValue = 'Buzz';
    }
        if ($param % 5 === 0 &&$param % 3 === 0 ) {
            $returnValue = 'FizzBuzz';
        }
        return $returnValue;
    }
}
