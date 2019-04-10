<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/4/8
 * Time: 12:02 AM
 */

namespace Allen\DesignPatterns\FacadeModel\Facades;

use Allen\DesignPatterns\DI\Container;

abstract class Facade
{
    private static $accessor = [];

    abstract protected static function getFacadeAccessor();

    /**
     * 子类重写该方法用于传入子类构造函数的参数
     * @return array
     */
    protected static function initArgs()
    {
        return [];
    }

    public static function __callStatic($method, $params)
    {
        // $cl = static::getFacadeAccessor();
        // if(!isset(self::$accessor[$cl])){
        //     self::$accessor[$cl] = new $cl(...static::initArgs());
        // }
        // return self::$accessor[$cl]->$className(...$params);

        //使用IOC容器
        $cl = static::getFacadeAccessor();
        $container = Container::getInstance();
        return $container->get($cl, static::initArgs())->$method(...$params);
    }

    public function clear($class)
    {
        unset(self::$accessor[$class]);
    }
}