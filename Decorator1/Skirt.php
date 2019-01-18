<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/5
 * Time: 17:16
 */

namespace Allen\DesignPatterns\Decorator1;


class Skirt extends Finery
{
    public function display()
    {
        p('穿上裙子');
        parent::display();
    }
}