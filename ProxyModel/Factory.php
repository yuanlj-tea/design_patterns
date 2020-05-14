<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/5/15
 * Time: 10:50 PM
 */

namespace Allen\DesignPatterns\ProxyModel;


class Factory
{
    public static function getDataBase($mode = 'master')
    {
        if ($mode == 'master') {
            pp("获取数据库的写库");
        } elseif ($mode == 'slave') {
            $slaveConf = [
                '127.0.0.1:3306',
                '127.0.0.1:3307',
            ];
            pp(sprintf("随机获取从库%s", array_rand($slaveConf)));
        }
    }
}