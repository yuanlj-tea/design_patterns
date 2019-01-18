<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/10/31
 * Time: 20:02
 */

namespace Allen\DesignPatterns\AbstractFactoryWithSimpleFactory;


class MysqlArticle implements Article
{
    public function select()
    {
        p('从MYSQL Article 查询数据');

    }

    public function insert()
    {
        p('向MYSQL Article 插入数据');

    }
}