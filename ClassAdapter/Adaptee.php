<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/1
 * Time: 12:29
 */

namespace Allen\DesignPatterns\ClassAdapter;

/**
 * 源类
 * Class Adaptee
 */
class Adaptee
{
    public $money = '$34';

    public function pay()
    {
        p('支付:'.$this->money);
    }
}