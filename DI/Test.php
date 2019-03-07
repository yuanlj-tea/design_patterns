<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 12:26 AM
 */

namespace Allen\DesignPatterns\DI;


class Test
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function test()
    {
        p($this->name);
        p('this is Test->test方法');
    }
}
