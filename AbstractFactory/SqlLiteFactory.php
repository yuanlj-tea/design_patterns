<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 12:14 AM
 */

namespace Allen\DesignPatterns\AbstractFactory;


class SqlLiteFactory implements Factory
{
    public function createUser()
    {
        return new SqlLiteUser();
    }

    public function createArticle()
    {
        return new SqlLiteArticle();
    }
}