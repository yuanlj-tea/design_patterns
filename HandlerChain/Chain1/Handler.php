<?php

namespace Allen\DesignPatterns\HandlerChain\Chain1;

abstract class Handler
{
    /**
     * @var Handler
     */
    protected $successor = null;

    /**
     * @param Handler $successor
     */
    public function setSuccessor(?Handler $successor)
    {
        $this->successor = $successor;
    }

    public abstract function handle();
}