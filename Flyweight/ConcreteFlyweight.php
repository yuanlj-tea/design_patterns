<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 20:09
 */

namespace Allen\DesignPatterns\Flyweight;

/**
 * 共享的具体单元类
 * Class ConcreteFlyweight
 * @package Allen\DesignPatterns\Flyweight
 */
class ConcreteFlyweight extends Flyweight
{
    public function show($content)
    {
        p('共享的单元 : ' . $this->name . ' : ' . $content);
    }
}