<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/29
 * Time: 10:41 PM
 */
namespace Allen\DesignPatterns\Singleton;

class Index
{
    private static $instance = null;

    /**
     * 私有的构造函数,防止类在外部被实例化
     * Index constructor.
     */
    private function __construct()
    {

    }

    /**
     * 私有的克隆函数,防止类在外部被克隆
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * 防止反序列化
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public static function getInstance()
    {
        if(!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$obj1 = Index::getInstance();
$obj2 = Index::getInstance();
//$obj3 = clone $obj1;
var_dump($obj1);
var_dump($obj2);
//var_dump($obj3);
