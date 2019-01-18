<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 11:19 PM
 */

namespace Allen\DesignPatterns\AbstractFactoryWithReflection;


class SqlLiteUser implements User
{
    public function select()
    {
        p('从 SqlLiteUser 读数据');
    }

    public function insert()
    {
        p('向 SqlLiteUser 插入数据');
    }
}