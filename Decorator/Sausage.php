<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/2
 * Time: 12:02 AM
 */

namespace Allen\DesignPatterns\Decorator;


class Sausage extends Decorator
{
    public function name()
    {
        return $this->food->name() . '+香肠';
    }

    public function price()
    {
        return $this->food->price() + 2;
    }
}