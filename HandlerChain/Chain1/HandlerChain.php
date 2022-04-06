<?php

namespace Allen\DesignPatterns\HandlerChain\Chain1;

class HandlerChain
{
    /**
     * @var Handler
     */
    private $head = null;

    /**
     * @var Handler
     */
    private $tail = null;

    public function addHandler(Handler $handler)
    {
        $handler->setSuccessor(null);

        if ($this->head === null) {
            $this->head = $handler;
            $this->tail = $handler;
        }
        $this->tail->setSuccessor($handler);
        $this->tail = $handler;
    }

    public function handle()
    {
        if ($this->head != null) {
            $this->head->handle();
        }
    }
}