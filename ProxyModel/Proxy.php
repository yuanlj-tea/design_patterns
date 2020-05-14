<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/5/15
 * Time: 10:45 PM
 */

namespace Allen\DesignPatterns\ProxyModel;

class Proxy implements IUserProxy
{
    public static function getUserName($id)
    {
        $model = Factory::getDataBase('slave');
        pp("查询{$id}的数据");
    }

    public static function setUserName($id, $name)
    {
        $model = Factory::getDataBase('master');
        pp("设置{$id}的name为{$name}");
    }
}