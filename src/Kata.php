<?php


namespace Kata;

class Kata
{
    public function execute($param){

        if( $param%3 === 0 ){
            return 'Fizz';
        }
        if ($param%5 === 0) {
            return 'Buzz';
        }

        return $param;
    }
}
