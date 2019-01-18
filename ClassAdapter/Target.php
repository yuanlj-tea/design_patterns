<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/1
 * Time: 12:30
 */

namespace Allen\DesignPatterns\ClassAdapter;

/**
 * 目标类接口
 * Interface Target
 * @package Allen\DesignPatterns\ClassAdapter
 */
interface Target
{
    /**
     * 支付
     * @return mixed
     */
    public function pay();

    /**
     * 通知
     * @return mixed
     */
    public function notify();
}