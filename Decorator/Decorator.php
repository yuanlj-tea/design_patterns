<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 11:59 PM
 */

namespace Allen\DesignPatterns\Decorator;


abstract class Decorator implements Food
{
    public $food;

    public function __construct(Food $food)
    {
        $this->food = $food;
    }
}