<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 10:33 PM
 */

namespace Allen\DesignPatterns\ObjectAdapter;


class Adapter implements Target
{

    public $obj;

    public function __construct(Adaptee $adaptee)
    {
        $this->obj = $adaptee;
        $adaptee->money = '5美元';
    }

    public function pay()
    {
        $this->obj->pay();
    }

    public function notify()
    {
        p('通知');
    }
}