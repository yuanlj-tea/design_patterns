<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 16:38
 */

namespace Allen\DesignPatterns\Facade;

require __DIR__.'/../vendor/autoload.php';

/**
 * 门面模式(外观模式)
 * Class Index
 * @package Allen\DesignPatterns\Facade
 */
class Index
{
    public function run()
    {
        $facade = new Facade();
        $facade->encryptContent();
    }
}

$obj = new Index();
$obj->run();