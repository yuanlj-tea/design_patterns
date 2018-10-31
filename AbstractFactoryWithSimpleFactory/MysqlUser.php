<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/10/31
 * Time: 19:58
 */

namespace Allen\DesignPatterns\AbstractFactoryWithSimpleFactory;


class MysqlUser implements User
{
    public function select()
    {
        echo '从MYSQL USER查询数据';
    }

    public function insert()
    {
        echo '向MYSQL USER插入数据';

    }
}