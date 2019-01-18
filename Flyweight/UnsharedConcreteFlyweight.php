<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 20:14
 */

namespace Allen\DesignPatterns\Flyweight;

/**
 * 不共享的具体单元类
 * Class UnsharedConcreteFlyweight
 * @package Allen\DesignPatterns\Flyweight
 */
class UnsharedConcreteFlyweight extends Flyweight
{
    public function show($content)
    {
        p('不共享的单元 : ' . $this->name  . $content);
    }

    public function delete()
    {
        $this->name = '';
    }
}