<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 8:36 PM
 */

namespace Allen\DesignPatterns\LaravelRequestQueue1;


class StartSession implements Middleware
{
    public static function handle(\Closure $next)
    {
        p('开启session，获取数据');
        $next();
        p('保存数据，关闭session');
    }
}