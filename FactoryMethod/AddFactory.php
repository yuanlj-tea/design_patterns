<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/30
 * Time: 11:49 PM
 */

namespace Allen\DesignPatterns\FactoryMethod;


class AddFactory extends Factory
{
    public function createObj()
    {
        return new Add();
    }
}