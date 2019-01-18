<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/30
 * Time: 10:14 PM
 */

namespace Allen\DesignPatterns\SimpleFactory;


class Add extends Operate
{
    public function getResult()
    {
        return $this->num_a + $this->num_b;
    }
}