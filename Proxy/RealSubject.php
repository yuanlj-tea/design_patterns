<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 23:32
 */

namespace Allen\DesignPatterns\Proxy;


class RealSubject implements Subject
{
    public function action()
    {
        pp('执行action方法');
    }
}