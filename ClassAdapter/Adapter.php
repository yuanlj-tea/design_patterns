<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/1
 * Time: 12:32
 */

namespace Allen\DesignPatterns\ClassAdapter;


class Adapter extends Adaptee implements Target
{
    /**
     * 金额
     * @var string
     */
    public $money = '';

    public function __construct($param)
    {
        $this->money = $param;
    }

    /*public function pay()
    {

    }*/

    public function notify()
    {
        p('通知');
    }
}