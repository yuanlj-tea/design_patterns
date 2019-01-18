<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 2:38 PM
 */

namespace Allen\DesignPatterns\Strategy;

/**
 * 具体策略角色-Y产品
 * Class YItem
 * @package Allen\DesignPatterns\RotateItem
 */
class YItem implements RotateItem
{
    public function Lrotate()
    {
        p('我是Y产品，左旋转');
    }

    public function Rrotate()
    {
        p('我是Y产品，右旋转');

    }
}