<?php


namespace Kata;

class FizzBuzz
{
    const DIVISIBLE_BY_THREE = 3;

    const DIVISIBLE_BY_FIVE = 5;

    public function getReplacement($param)
    {
        $returnValue = $param;
        if(!is_integer($param)){
            throw new IsNoNumberException();
        }

        if ($this->checkDivisibleByThree($param)) {
            $returnValue = 'Fizz';
        }
        if ($this->checkDivisibleByFive($param)) {
            $returnValue = 'Buzz';
        }
        if ($this->checkDivisibleFiveAndThree($param)) {
            $returnValue = 'FizzBuzz';
        }
        return $returnValue;
    }

    /**
     * @param $param
     * @return boolean
     */
    public function checkDivisibleByThree($param)
    {
        return $param % self::DIVISIBLE_BY_THREE === 0;
    }

    /**
     * @param $param
     * @return string
     */
    public function checkDivisibleByFive($param)
    {
        return $param % self::DIVISIBLE_BY_FIVE === 0;
    }

    /**
     * @param $param
     * @return string
     */
    public function checkDivisibleFiveAndThree($param)
    {
        return $param % self::DIVISIBLE_BY_FIVE === 0 && $param % self::DIVISIBLE_BY_THREE === 0;
    }
}
