<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 10:33 PM
 */

namespace Allen\DesignPatterns\ObjectAdapter;


interface Target
{
    public function pay();

    public function notify();
}