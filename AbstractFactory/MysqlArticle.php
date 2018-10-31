<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 12:20 AM
 */

namespace Allen\DesignPatterns\AbstractFactory;


class MysqlArticle implements User
{
    public function insert()
    {
        pp("向MYSQL ARTICLE插入数据");
    }

    public function select()
    {
        pp("从MYSQL ARTICLE查询数据");

    }
}