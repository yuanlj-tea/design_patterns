<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/4/8
 * Time: 12:12 AM
 */

namespace Allen\DesignPatterns\FacadeModel\Facades;

class Log extends Facade
{
    /**
     * 传入真实Log类的构造函数的参数
     * @return array
     */
    protected static function initArgs()
    {
        return ['a', 'b'];
    }

    protected static function getFacadeAccessor()
    {
        return \Allen\DesignPatterns\FacadeModel\Log::class;
    }

}