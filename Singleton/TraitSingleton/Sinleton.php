<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/9
 * Time: 14:21
 */

namespace Allen\DesignPatterns\Singleton\TraitSingleton;

trait Sinleton
{
    private static $_instance;

    public static function getInstance(...$args)
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new static(...$args);
        }

        return self::$_instance;
    }
}