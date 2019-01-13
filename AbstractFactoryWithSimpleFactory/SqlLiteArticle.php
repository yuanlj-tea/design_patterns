<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/10/31
 * Time: 20:03
 */

namespace Allen\DesignPatterns\AbstractFactoryWithSimpleFactory;


class SqlLiteArticle implements Article
{
    public function select()
    {
        echo '从SQLLITE Article 查询数据';

    }


    public function insert()
    {
        echo '向SQLLITE Article 插入数据';

    }
}