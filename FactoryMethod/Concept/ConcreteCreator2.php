<?php

namespace Allen\DesignPatterns\FactoryMethod\Concept;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}