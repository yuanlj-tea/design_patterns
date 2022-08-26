<?php

namespace Allen\DesignPatterns\AbstractFactory\Conceptual;

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}