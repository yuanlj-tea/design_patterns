<?php

namespace Allen\DesignPatterns\FactoryMethod\Concept;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}