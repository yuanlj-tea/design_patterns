<?php

namespace Allen\DesignPatterns\HandlerChain\Chain2;

require __DIR__ . '/../../vendor/autoload.php';

class Index
{
    public function run()
    {
        $chain = new HandlerChain();
        $chain->addHandler(new HandlerA());
        $chain->addHandler(new HandlerB());
        $chain->handle();
    }
}

$index = new Index();
$index->run();