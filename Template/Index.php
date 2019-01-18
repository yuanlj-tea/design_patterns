<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 12:20 AM
 */

namespace Allen\DesignPatterns\Template;

require __DIR__.'/../vendor/autoload.php';

/**
 * 模板方法模式
 * Class Index
 * @package Allen\DesignPatterns\Template
 */
class Index
{
    public function run()
    {
        $xiaomi = new Xiaomi();
        $xiaomi->action();

        $letv = new Letv();
        $letv->action();
    }
}

$index = new Index();
$index->run();

