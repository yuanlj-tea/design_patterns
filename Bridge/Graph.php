<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 10:52 PM
 */

namespace Allen\DesignPatterns\Bridge;

/**
 * 形状抽象类
 * Class Graph
 * @package Allen\DesignPatterns\Bridge
 */

abstract class Graph
{
    public $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    abstract public function draw();
}