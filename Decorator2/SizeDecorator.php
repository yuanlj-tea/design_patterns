<?php


namespace Allen\DesignPatterns\Decorator2;


class SizeDecorator implements DecoratorInterface
{
    public function beforeDraw()
    {
        pp('size before draw');
    }

    public function afterDraw()
    {
        pp('size after draw');
    }


}