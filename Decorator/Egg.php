<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/2
 * Time: 12:00 AM
 */

namespace Allen\DesignPatterns\Decorator;


class Egg extends Decorator
{
    public function name()
    {
        return $this->food->name() . '+蛋';
    }

    public function price()
    {
        return $this->food->price() +1;
    }
}