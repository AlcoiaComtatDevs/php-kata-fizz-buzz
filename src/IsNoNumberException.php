<?php
/**
 * Created by PhpStorm.
 * User: mpalacios
 * Date: 26/05/2017
 * Time: 17:48
 */

namespace Kata;

class IsNoNumberException extends \Exception
{
    public function __construct(){
        parent::__construct("Es un string");
    }

}