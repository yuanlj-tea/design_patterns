<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/10/31
 * Time: 20:06
 */

namespace Allen\DesignPatterns\AbstractFactoryWithSimpleFactory;


class Factory
{
    public $db = '';

    public function __construct()
    {
        $dbConfig = include_once "./config.php";
        $this->db = $dbConfig['driver'];

    }

    public function createUser()
    {
        p($this->db,1);
        switch ($this->db){
            case 'Mysql':
                $obj = new MysqlUser();
                break;
            case 'SqlLite':
                $obj = new SqlLiteUser();
                break;
            default:
                throw new \InvalidIndexSearchTextException('无效的参数');
                break;
        }
        return $obj;
    }

    public function createArticle()
    {
        switch ($this->db){
            case 'Mysql':
                $obj = new MysqlArticle();
                break;
            case 'SqlLite':
                $obj = new SqlLiteArticle();
                break;
            default:
                throw new \InvalidIndexSearchTextException('无效的参数');
                break;
        }

        return $obj;
    }
}