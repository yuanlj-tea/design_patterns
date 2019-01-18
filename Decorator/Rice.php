<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 11:58 PM
 */

namespace Allen\DesignPatterns\Decorator;


class Rice implements Food
{
    public function name()
    {
        return '米饭';

    }

    public function price()
    {
        return 3;
    }
}