<?php

namespace Allen\DesignPatterns\HandlerChain\Chain2;

abstract class Handler
{
    /**
     * @var Handler
     */
    protected $successor = null;

    public function setSuccessor(?Handler $handler)
    {
        $this->successor = $handler;
    }

    final public function handle()
    {
        $handled = $this->doHandle();
        // do sth
        if ($this->successor != null && !$handled) {
            $this->successor->handle();
        }
    }

    abstract public function doHandle();

}