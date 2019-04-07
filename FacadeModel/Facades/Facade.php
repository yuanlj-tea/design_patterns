<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/4/8
 * Time: 12:02 AM
 */

namespace Allen\DesignPatterns\FacadeModel\Facades;

abstract class Facade
{
    private static $accessor = [];

    abstract protected static function getFacadeAccessor();

    protected static function initArgs()
    {
        return [];
    }

    public static function __callStatic($className,$params)
    {
        $cl = static::getFacadeAccessor();
        if(!isset(self::$accessor[$cl])){
            self::$accessor[$cl] = new $cl(...static::initArgs());
        }
        return self::$accessor[$cl]->$className(...$params);

    }

    public function clear($class)
    {
        unset(self::$accessor[$class]);
    }
}