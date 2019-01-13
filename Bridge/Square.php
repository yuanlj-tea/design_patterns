<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 10:55 PM
 */

namespace Allen\DesignPatterns\Bridge;


class Square extends Graph
{
    public function draw()
    {
        p('画一个'.$this->color->run().'的正方形');
    }
}