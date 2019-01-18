<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/10/31
 * Time: 19:58
 */

namespace Allen\DesignPatterns\AbstractFactoryWithSimpleFactory;


interface Article
{
    public function select();

    public function insert();
}