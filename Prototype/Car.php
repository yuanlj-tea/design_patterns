<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 8:29 AM
 */

namespace Allen\DesignPatterns\Prototype;

class Car
{
    public $name;

    public function setName($param)
    {
        $this->name = $param;
    }
}