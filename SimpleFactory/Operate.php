<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/30
 * Time: 10:11 PM
 */

namespace Allen\DesignPatterns\SimpleFactory;


abstract class Operate
{
    public $num_a;

    public $num_b;

    public function setA($param)
    {
        $this->num_a = $param;
    }

    public function setB($param)
    {
        $this->num_b = $param;
    }

    abstract public function getResult();
}