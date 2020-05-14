<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/4/8
 * Time: 12:15 AM
 */

namespace Allen\DesignPatterns\FacadeModel;

require __DIR__.'/../vendor/autoload.php';

use Allen\DesignPatterns\FacadeModel\Facades\Log;

class Index
{
    public function __construct()
    {
        Log::info('foo',['foo','bar']);
    }
}

new Index();