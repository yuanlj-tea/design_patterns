<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 12:13 AM
 */

namespace Allen\DesignPatterns\AbstractFactory;


class MysqlFactory implements Factory
{
    public function createUser()
    {
        return new MysqlUser();
    }

    public function createArticle()
    {
        return new MysqlArticle();
    }

}