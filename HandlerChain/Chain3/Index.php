<?php

namespace Allen\DesignPatterns\HandlerChain\Chain3;

require __DIR__ . '/../../vendor/autoload.php';


class Index
{
    public function run()
    {
        $chain = new HandlerChain();
        $chain->addHandler(new HandleA());
        $chain->addHandler(new HandleB());
        $chain->handle();
    }
}

$index = new Index();
$index->run();