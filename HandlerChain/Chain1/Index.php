<?php

namespace Allen\DesignPatterns\HandlerChain\Chain1;

require __DIR__ . '/../../vendor/autoload.php';

class Index
{
    public function main()
    {
        $chain = new HandlerChain();
        $chain->addHandler(new HandlerA());
        $chain->addHandler(new HandlerB());
        $chain->handle();
    }
}

$index = new Index();
$index->main();