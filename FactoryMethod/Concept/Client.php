<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/30
 * Time: 11:50 PM
 */

namespace Allen\DesignPatterns\FactoryMethod\Concept;


require_once __DIR__ . '/../../vendor/autoload.php';

function clientCode(Creator $creator)
{
    // ...
    echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperation();
    // ...
}

clientCode(new ConcreteCreator1());