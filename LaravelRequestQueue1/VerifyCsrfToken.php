<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 8:31 PM
 */

namespace Allen\DesignPatterns\LaravelRequestQueue1;


class VerifyCsrfToken implements Middleware
{
    public static function handle(\Closure $next)
    {
        p('验证csrf token');
        $next();
    }
}