<?php

namespace Allen\DesignPatterns\FactoryMethod\Concept;

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}