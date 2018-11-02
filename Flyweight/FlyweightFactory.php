<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 20:17
 */

namespace Allen\DesignPatterns\Flyweight;

/**
 * 享元工厂
 * Class FlyweightFactory
 * @package Allen\DesignPatterns\Flyweight
 */
class FlyweightFactory
{
    private $flyweights = [];

    public function getFlyweight($name)
    {
        if (!isset($this->flyweights[$name])) {
            $this->flyweights[$name] = new ConcreteFlyweight($name);
        }
        return $this->flyweights[$name];
    }

    public function dumpFlyweight()
    {
        p($this->flyweights);
    }
}