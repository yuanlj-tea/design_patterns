<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/5
 * Time: 17:17
 */

namespace Allen\DesignPatterns\Decorator1;


class Fire extends Finery
{
    public function display()
    {
        p('出门前先整理头发');
        parent::display();
        p('出门后再整理下头发');
    }
}