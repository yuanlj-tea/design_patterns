<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 20:06
 */

namespace Allen\DesignPatterns\Flyweight;

/**
 * 享元抽象类
 * Class Flyweight
 * @package Allen\DesignPatterns\Flyweight
 */
abstract class Flyweight
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {

    }
}