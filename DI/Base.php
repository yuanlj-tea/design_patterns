<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/4
 * Time: 9:08 PM
 */

namespace Allen\DesignPatterns\DI;


class Base
{
    /**
     * 魔术方法
     * @param string $name
     * @param string $value
     * @return void
     */
    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }
}