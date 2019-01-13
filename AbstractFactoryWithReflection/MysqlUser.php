<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 11:18 PM
 */

namespace Allen\DesignPatterns\AbstractFactoryWithReflection;


class MysqlUser implements User
{
    public function select()
    {
        p('从 MysqlUser 读数据');
    }

    public function insert()
    {
        p('向 MysqlUser 插入数据');
    }
}