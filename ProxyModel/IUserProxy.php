<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/5/15
 * Time: 10:48 PM
 */

namespace Allen\DesignPatterns\ProxyModel;


interface IUserProxy
{
    public static function getUserName($id);

    public static function setUserName($id,$name);
}