<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 2:37 PM
 */

namespace Allen\DesignPatterns\Strategy;

/**
 * 具体策略角色-X产品
 * Class XItem
 * @package Allen\DesignPatterns\RotateItem
 */
class XItem implements RotateItem
{
    public function Lrotate()
    {
        p('我是x产品，左旋转');
    }

    public function Rrotate()
    {
        p('我是x产品，右旋转');
    }
}