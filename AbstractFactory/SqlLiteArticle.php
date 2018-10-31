<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 12:22 AM
 */

namespace Allen\DesignPatterns\AbstractFactory;


class SqlLiteArticle implements User
{
    public function insert()
    {
        pp("向SqlLite ARTICLE插入数据");

    }

    public function select()
    {
        pp("从SqlLite ARTICLE查询数据");

    }
}