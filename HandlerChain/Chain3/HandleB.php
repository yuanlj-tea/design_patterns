<?php

namespace Allen\DesignPatterns\HandlerChain\Chain3;

class HandleB implements IHandler
{
    public function handle()
    {
        $handled = false;
        pp(__CLASS__);
        return $handled;
    }

}