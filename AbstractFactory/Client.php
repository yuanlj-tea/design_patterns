<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 12:23 AM
 */

namespace Allen\DesignPatterns\AbstractFactory;

require_once __DIR__.'/../vendor/autoload.php';

/**
 * 抽象工厂模式
 * Class Client
 * @package Allen\DesignPatterns\AbstractFactory
 */
class Client
{
    public function run()
    {
        $factory = new MysqlFactory();
        $mysqlUserObj = $factory->createUser();
        $mysqlUserObj->select();
        $mysqlUserObj->insert();

        $sqlLiteArticleObj = $factory->createArticle();
        $sqlLiteArticleObj->select();
        $sqlLiteArticleObj->insert();

        $factory1 = new SqlLiteFactory();
        $mysqlUserObj1 = $factory1->createUser();
        $mysqlUserObj1->insert();
        $mysqlUserObj1->select();

        $sqlLiteArticleObj1 = $factory1->createArticle();
        $sqlLiteArticleObj1->select();
        $sqlLiteArticleObj1->insert();
    }
}

$cliObj = new Client();
$cliObj->run();