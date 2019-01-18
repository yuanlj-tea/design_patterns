<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 11:56 PM
 */

namespace Allen\DesignPatterns\Decorator;


class Noodle implements Food
{
    public function name()
    {
        return '面条';
    }

    public function price()
    {
        return 5;
    }
}