<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/4/8
 * Time: 12:10 AM
 */

namespace Allen\DesignPatterns\FacadeModel;


class Log
{
    public function info(...$params)
    {
        print_r($params);
    }
}