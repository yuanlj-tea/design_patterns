<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 8:41 PM
 */

namespace Allen\DesignPatterns\LaravelRequestQueue1;


class CheckForMaintenanceMode implements Middleware
{
    public static function handle(\Closure $next)
    {
        // TODO: Implement handle() method.
        p("确定当前程序是否处于维护状态");
        $next();
    }
}