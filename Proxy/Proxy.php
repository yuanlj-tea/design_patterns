<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 23:32
 */

namespace Allen\DesignPatterns\Proxy;


/**
 * 代理
 * Class Proxy
 * @package Allen\DesignPatterns\Proxy
 */
class Proxy implements Subject
{
    protected $obj;

    public function __construct()
    {
        $this->obj = new RealSubject();
    }


    public function action()
    {
        $this->obj->action();
    }
}