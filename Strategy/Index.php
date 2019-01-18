<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 2:43 PM
 */

namespace Allen\DesignPatterns\Strategy;

require __DIR__.'/../vendor/autoload.php';

/**
 * 策略模式
 * Class Index
 * @package Allen\DesignPatterns\RotateItem
 */
class Index
{
    // 命名空间
    public $namespace = "\Allen\DesignPatterns\Strategy\\";

    // 类名
    public $class_name;

    public function __construct($class_name)
    {
        $this->class_name = $this->namespace . $class_name;
    }

    public function run()
    {

        $obj = new Strategy();
        $obj->getItem($this->class_name);
        $obj->Lrotate();
        $obj->Rrotate();

    }
}
hoops();
$obj = new Index('Xitem');
$obj->run();

$obj = new Index('YItem');
$obj->run();

$obj = new Index('CItem');
$obj->run();