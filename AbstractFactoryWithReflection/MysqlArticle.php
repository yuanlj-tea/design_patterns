<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 11:21 PM
 */

namespace Allen\DesignPatterns\AbstractFactoryWithReflection;


class MysqlArticle implements Article
{
    public function select()
    {
        p('从 MysqlArticle 读数据');

    }

    public function insert()
    {
        p('向 MysqlArticle 插入数据');

    }
}