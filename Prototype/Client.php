<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 8:32 AM
 */

namespace Allen\DesignPatterns\Prototype;

require __DIR__.'/../vendor/autoload.php';

/**
 * 原型模式
 * Class Client
 * @package Allen\DesignPatterns\Prototype
 */
class Client
{
    public function shallowCopy()
    {
        $car = new Car();
        $car->name = '特斯拉';
        $shallowDrive = new ShallowDrive();
        $shallowDrive->setCar($car);
        $shallowDrive->show();

        $clone = clone $shallowDrive;
        $clone->show();

        echo '<hr>';
        $car->name = '奥迪';
        $shallowDrive->show();
        $clone->show();
    }

    public function deepCopy()
    {
        $car = new Car();
        $car->name = '特斯拉';

        $deepDrive = new DeepDrive();
        $deepDrive->setCar($car);
        $deepDrive->show();

        $clone = clone $deepDrive;
        $clone->show();

        echo '<hr>';
        $car->name = '奥迪';
        $deepDrive->show();
        $clone->show();
    }
}

$cli = new Client();
//$cli->shallowCopy();

$cli->deepCopy();