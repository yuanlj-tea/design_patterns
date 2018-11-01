<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 10:54 PM
 */

namespace Allen\DesignPatterns\Bridge;


class Circular extends Graph
{
    public function draw()
    {
        p('画一个'.$this->color->run().'的圆形');
    }
}