<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/10/31
 * Time: 20:00
 */

namespace Allen\DesignPatterns\AbstractFactoryWithSimpleFactory;


class SqlLiteUser implements User
{
    public function select()
    {
        echo '从SQLLITE USER查询数据';

    }

    public function insert()
    {
        echo '向SQLLITE USER插入数据';


    }
}