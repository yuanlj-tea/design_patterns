<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 10:36 PM
 */

namespace Allen\DesignPatterns\ObjectAdapter;

require __DIR__.'/../vendor/autoload.php';

class Index
{
    public function run()
    {
        $obj = new Adaptee();
        $obj->pay();

        $obj1 = new Adapter($obj);
        $obj1->pay();
        $obj1->notify();
    }
}

$obj  = new Index();
$obj->run();