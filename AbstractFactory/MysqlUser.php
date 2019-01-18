<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 12:11 AM
 */

namespace Allen\DesignPatterns\AbstractFactory;


class MysqlUser implements User
{
    public function insert()
    {
        pp("向MYSQL USER表新增数据");
    }

    public function select()
    {
        pp("从MYSQL USER表查询数据");
    }
}