<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/1
 * Time: 11:54 PM
 */

namespace Allen\DesignPatterns\Decorator;
/**
 * 食物接口
 * Interface Food
 * @package Allen\DesignPatterns\Decorator
 */
interface Food
{
    public function name();

    public function price();
}