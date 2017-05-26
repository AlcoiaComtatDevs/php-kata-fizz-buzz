<?php


namespace Kata;

class FizzBuzz
{
    const DIVISIBLE_BY_THREE = 3;

    const DIVISIBLE_BY_FIVE = 5;

    public function getReplacement($param)
    {
        $returnValue = $param;


        if ($param % self::DIVISIBLE_BY_THREE === 0) {
            $returnValue = 'Fizz';
        }
        if ($param % self::DIVISIBLE_BY_FIVE === 0) {
        $returnValue = 'Buzz';
        }
        if ($param % self::DIVISIBLE_BY_FIVE === 0 && $param % self::DIVISIBLE_BY_THREE === 0 ) {
            $returnValue = 'FizzBuzz';
        }
        return $returnValue;
    }
}
