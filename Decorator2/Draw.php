<?php


namespace Allen\DesignPatterns\Decorator2;


class Draw
{
    private $decorator = [];

    public function draw()
    {
        $this->beforeDraw();
        pp('draw');
        $this->afterDraw();
    }

    public function addDecorator(DecoratorInterface $decorator)
    {
        $this->decorator[] = $decorator;
    }

    public function beforeDraw()
    {
        foreach ($this->decorator as $k => $decorator) {
            $decorator->beforeDraw();
        }
    }

    public function afterDraw()
    {
        foreach ($this->decorator as $k => $decorator) {
            $decorator->afterDraw();
        }
    }
}