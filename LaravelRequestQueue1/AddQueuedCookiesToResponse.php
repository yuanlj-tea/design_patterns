<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 8:38 PM
 */

namespace Allen\DesignPatterns\LaravelRequestQueue1;


class AddQueuedCookiesToResponse implements Middleware
{
    public static function handle(\Closure $next)
    {
        $next();
        p("添加下一次请求需要的cookie");
    }
}