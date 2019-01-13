<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/30
 * Time: 11:47 PM
 */

namespace Allen\DesignPatterns\FactoryMethod;


class Sub extends Operate
{
    public function getResult()
    {
        return $this->num_a - $this->num_b;
    }
}