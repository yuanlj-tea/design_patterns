<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/5
 * Time: 17:10
 */

namespace Allen\DesignPatterns\Decorator1;


class Finery implements Decorator
{
    private $component;

    public function __construct(Decorator $component)
    {
        $this->component = $component;
    }

    public function display()
    {
        $this->component->display();
    }
}