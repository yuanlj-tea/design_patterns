<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/30
 * Time: 11:50 PM
 */

namespace Allen\DesignPatterns\FactoryMethod;


require_once __DIR__.'/../vendor/autoload.php';

/**
 * 工厂方法模式测试
 * Class Client
 * @package Allen\DesignPatterns\FactoryMethod
 */
class Client
{
    public function bad()
    {
        $obj1 = new Add();
        $obj1->setB(10);
        $obj1->setA(20);
        $res1 = $obj1->getResult();

        $obj2 = new Add();
        $obj2->setA(1);
        $obj2->setB(2);
        $res2 = $obj2->getResult();
        pp('bad',$res1,$res2);
    }

    public function good()
    {
        $factory = new AddFactory();
        $obj = $factory->createObj();
        $obj->setA(10);
        $obj->setB(20);
        $res = $obj->getResult();

        pp('good',$res);

    }
}

$cli = new Client();
$cli->bad();
$cli->good();