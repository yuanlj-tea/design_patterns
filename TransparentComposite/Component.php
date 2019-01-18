<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 15:56
 */

namespace Allen\DesignPatterns\TransparentComposite;

/**
 * 包含树枝节点和叶子节点方法的抽象类
 * Class Component
 * @package Allen\DesignPatterns\TransparentComposite
 */
abstract class Component
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    //abstract public function add();

    abstract public function display();
}