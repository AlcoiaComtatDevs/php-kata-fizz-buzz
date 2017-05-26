<?php


namespace Kata;

class Kata
{
    public function execute($param){

        if( $param%3 == 0 )
            return "Fizz";
        else
            return $param;
    }
}
