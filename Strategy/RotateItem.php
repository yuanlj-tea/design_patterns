<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 2:35 PM
 */

namespace Allen\DesignPatterns\Strategy;


/**
 * 抽象策略角色
 * Interface RotateItem
 * @package Allen\DesignPatterns\RotateItem
 */
interface RotateItem
{
    public function Lrotate();

    public function Rrotate();
}