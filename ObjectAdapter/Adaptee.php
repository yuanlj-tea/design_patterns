<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 10:30 PM
 */

namespace Allen\DesignPatterns\ObjectAdapter;

class Adaptee
{ 
    public $money = '$5';

    public function pay()
    {
        p('支付 : '.$this->money);
    }

}