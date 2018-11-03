<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/1
 * Time: 12:35
 */

namespace Allen\DesignPatterns\ClassAdapter;

require __DIR__."/../vendor/autoload.php";

/**
 * 类适配器模式
 * Class Index
 * @package Allen\DesignPatterns\ClassAdapter
 */
class Index
{
    public function run()
    {
        $obj = new Adaptee();
        $obj->pay();

        $obj1 = new Adapter('10块钱');
        $obj1->pay();

        $obj1->notify();
    }
}

$cli = new Index();
$cli->run();