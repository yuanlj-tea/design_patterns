<?php


namespace Allen\DesignPatterns\Decorator2;


class ColorDecorator implements DecoratorInterface
{
    public function beforeDraw()
    {
        pp('color before draw');
    }

    public function afterDraw()
    {
        pp('color after draw');
    }

}