<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/4
 * Time: 9:09 PM
 */

namespace Allen\DesignPatterns\DI;


class A extends Base
{
    private $instanceB;

    public function __construct(B $instanceB)
    {
        $this->instanceB = $instanceB;
    }

    public function test()
    {
        $this->instanceB->test();
    }
}