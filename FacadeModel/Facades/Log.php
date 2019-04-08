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
    protected static function initArgs()
    {
        return ['a', 'b'];
    }

    protected static function getFacadeAccessor()
    {
        return \Allen\DesignPatterns\FacadeModel\Log::class;
    }

}