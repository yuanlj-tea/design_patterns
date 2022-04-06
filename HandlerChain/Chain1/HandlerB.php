<?php

namespace Allen\DesignPatterns\HandlerChain\Chain1;

class HandlerB extends Handler
{
    public function handle()
    {
        $handled = false;
        //do sth
        pp(__CLASS__);
        if (!$handled && !empty($this->successor)) {
            $this->successor->handle();
        }
    }


}