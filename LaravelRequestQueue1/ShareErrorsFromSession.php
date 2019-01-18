<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 8:34 PM
 */

namespace Allen\DesignPatterns\LaravelRequestQueue1;


class ShareErrorsFromSession implements Middleware
{
    public static function handle(\Closure $next)
    {
        p("如果session中有errors变量，则共享它");
        $next();
    }
}