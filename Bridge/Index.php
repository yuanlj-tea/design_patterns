<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 10:56 PM
 */

namespace Allen\DesignPatterns\Bridge;

require __DIR__.'/../vendor/autoload.php';

/**
 * 桥接模式
 * Class Index
 * @package Allen\DesignPatterns\Bridge
 */
class Index
{
    public function run()
    {
        $red_obj = new Red();
        $yellow_obj = new Yellow();

        $square_obj = new Square($red_obj);
        $square_obj->draw();

        $square_obj = new Square($yellow_obj);
        $square_obj->draw();

        $circular_obj = new Circular($red_obj);
        $circular_obj->draw();

        $circular_obj = new Circular($yellow_obj);
        $circular_obj->draw();

    }
}

$obj = new Index();
$obj->run();