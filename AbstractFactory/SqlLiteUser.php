<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 12:15 AM
 */

namespace Allen\DesignPatterns\AbstractFactory;


class SqlLiteUser implements User
{
    public function insert()
    {
        pp("向SqlLite USER表新增数据");
    }

    public function select()
    {
        pp("从SqlLite USER表查询数据");

    }
}