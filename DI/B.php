<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/4
 * Time: 9:09 PM
 */

namespace Allen\DesignPatterns\DI;


class B extends Base
{
    private $instanceC;

    public function __construct(C $instanceC)
    {
        $this->instanceC = $instanceC;
    }

    public function test()
    {
        return $this->instanceC->test();
    }

    public function callB()
    {
        p(sprintf("this is %s class , %s action",__CLASS__,__FUNCTION__));

    }
}