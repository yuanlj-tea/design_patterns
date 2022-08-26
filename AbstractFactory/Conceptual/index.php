<?php

namespace Allen\DesignPatterns\AbstractFactory\Conceptual;

/**
 * The client code works with factories and products only through abstract
 * types: AbstractFactory and AbstractProduct. This lets you pass any factory or
 * product subclass to the client code without breaking it.
 */
function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB() . "\n";
    echo $productB->anotherUsefulFunctionB($productA) . "\n";
}

echo "Client: Testing client code with the first factory type:\n";
clientCode(new ConcreteFactory1());

// echo "Client: Testing the same client code with the second factory type:\n";
// clientCode(new ConcreteFactory2());