<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 23:30
 */

namespace Allen\DesignPatterns\Proxy;

/**
 * 主题接口,定义真实主题和代理的公共方法
 * Interface Subject
 * @package Allen\DesignPatterns\Proxy
 */
interface Subject
{

    public function action();

}