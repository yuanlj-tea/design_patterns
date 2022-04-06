<?php

namespace Allen\DesignPatterns\HandlerChain\Chain2;

class HandlerA extends Handler
{
    public function doHandle()
    {
        $handled = false;
        // do sth
        pp(__CLASS__);
        return $handled;
    }

}