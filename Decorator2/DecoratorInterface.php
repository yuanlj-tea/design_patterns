<?php

namespace Allen\DesignPatterns\Decorator2;


interface DecoratorInterface
{
    public function beforeDraw();

    public function afterDraw();
}