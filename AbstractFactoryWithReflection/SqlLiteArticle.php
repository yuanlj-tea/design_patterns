<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 11:22 PM
 */

namespace Allen\DesignPatterns\AbstractFactoryWithReflection;


class SqlLiteArticle implements Article
{
    public function select()
    {
        p('从 SqlLiteArticle 读数据');

    }

    public function insert()
    {
        p('向 SqlLiteArticle 插入数据');

    }
}