<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/2
 * Time: 12:03 AM
 */

namespace Allen\DesignPatterns\Decorator;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 装饰器模式
 * Class Index
 * @package Allen\DesignPatterns\Decorator
 */
class Index
{
    public function run()
    {
        $obj = new Noodle();
        p($obj->name() . ':' . $obj->price().'元');

        $obj1 = new Rice();
        p($obj1->name() . ':' . $obj1->price().'元');


        $egg = new Egg($obj);
        p($egg->name() . ':' . $egg->price().'元');

        $egg1 = new Egg($obj1);
        p($egg1->name() . ':' . $egg1->price().'元');


        $sausage = new Sausage($obj);
        p($sausage->name() . ':' . $sausage->price().'元');


        $sausage1 = new Sausage($obj1);
        p($sausage1->name() . ':' . $sausage1->price().'元');

    }
}

$cli = new Index();
$cli->run();