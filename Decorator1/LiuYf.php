<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/5
 * Time: 17:00
 */

namespace Allen\DesignPatterns\Decorator1;


class LiuYf implements Decorator
{
    
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;        
    }

    public function display()
    {
        p("我是{$this->name},我要出门了！");
    }
}