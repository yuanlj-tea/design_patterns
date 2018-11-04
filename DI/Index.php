<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/4
 * Time: 9:10 PM
 */

namespace Allen\DesignPatterns\DI;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 依赖注入,控制反转
 * Class Index
 * @package Allen\DesignPatterns\DI
 */
class Index
{
    private $_namespace = '\\'.__NAMESPACE__.'\\';

    public function run()
    {
        $container = new Container;
        $a = $container->get($this->_namespace.'A');
        $a->test();
    }

}

hoops();

$obj = new Index();
$obj->run();