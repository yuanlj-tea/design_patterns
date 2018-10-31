<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/10/31
 * Time: 20:11
 */

namespace Allen\DesignPatterns\AbstractFactoryWithSimpleFactory;

require_once __DIR__.'/../vendor/autoload.php';

class Client
{
    public function run()
    {
        $factory = new Factory();
        $obj = $factory->createUser();
        $obj->select();
        $obj->insert();

        $factory1 = new Factory();
        $obj1 = $factory1->createArticle();
        $obj1->select();
        $obj1->insert();
    }
}

$cli = new Client();
$cli->run();