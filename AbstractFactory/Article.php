<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 12:18 AM
 */

namespace Allen\DesignPatterns\AbstractFactory;


interface Article
{
    public function select();

    public function insert();
}