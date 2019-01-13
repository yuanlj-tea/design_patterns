<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/5
 * Time: 17:15
 */

namespace Allen\DesignPatterns\Decorator1;


class Shoes extends Finery
{
    public function display()
    {
        p('穿上鞋子');
        parent::display();
    }
}