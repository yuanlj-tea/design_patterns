<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/30
 * Time: 11:44 PM
 */

namespace Allen\DesignPatterns\FactoryMethod;

abstract class Operate
{
    public $num_a;

    public $num_b;

    abstract public function getResult();

    public function setA($param)
    {
        $this->num_a = $param;
    }

    public function setB($param)
    {
        $this->num_b = $param;
    }
}