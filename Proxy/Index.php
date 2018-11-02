<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 23:34
 */

namespace Allen\DesignPatterns\Proxy;

require __DIR__.'/../vendor/autoload.php';

class Index
{
    public function run()
    {
        $proxy = new Proxy();
        $proxy->action();
    }
}

hoops();


$obj = new Index();
$obj->run();