<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 12:15 AM
 */

namespace Allen\DesignPatterns\Template;

abstract class Phone
{
    /**
     * 不允许被重载,定义方法的执行顺序
     */
    final function action(){
        $this->powerOn();
        $this->showLogo();
        $this->callUp();
    }

    /**
     * 开机
     */
    protected function powerOn(){
        p('开机');
    }

    /**
     * 抽象方法-显示logo
     * @return mixed
     */
    abstract protected function showLogo();

    protected function callUp()
    {
        p('放电影');
    }
}