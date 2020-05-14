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
    protected $params;

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    public function info(...$params)
    {
        pp($this->params);
        print_r($params);
    }
}