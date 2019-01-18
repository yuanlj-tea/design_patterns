<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 5:05 PM
 */

namespace Allen\DesignPatterns\Observer;

/**
 * 被观察者接口，实现注册观察者、删除观察者和通知的功能
 * Class Observables
 * @package Allen\DesignPatterns\Observer
 */
interface Observables
{
    public function attach(Observer $ob);

    public function detach(Observer $ob);

    public function notify();
}