<?php

namespace Allen\DesignPatterns\Observer\Conceptual;

require __DIR__ . '/../../vendor/autoload.php';

$subject = new Subject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();