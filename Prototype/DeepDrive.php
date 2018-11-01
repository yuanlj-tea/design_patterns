<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 8:39 AM
 */

namespace Allen\DesignPatterns\Prototype;


class DeepDrive
{
    private $car = '';

    public function __construct()
    {
        p('Deep:准备完成');
    }

    public function setCar($car)
    {
        $this->car = $car;
    }

    public function show()
    {
        p( '开始驾驶'.$this->car->name);
    }

    public function __clone()
    {
        $this->car = clone $this->car;
    }


}