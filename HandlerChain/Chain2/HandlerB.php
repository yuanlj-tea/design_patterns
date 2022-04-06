<?php

namespace Allen\DesignPatterns\HandlerChain\Chain2;

class HandlerB extends Handler
{
    public function doHandle()
    {
        $handled = false;
        // do sth
        pp(__CLASS__);
        return $handled;
    }

}