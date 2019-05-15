<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/5/15
 * Time: 10:49 PM
 */

namespace Allen\DesignPatterns\ProxyModel;

require_once __DIR__.'/../vendor/autoload.php';

class Index
{
    public function run()
    {
        Proxy::getUserName(1);
        Proxy::setUserName(1,"zs");
    }
}

(new Index())->run();