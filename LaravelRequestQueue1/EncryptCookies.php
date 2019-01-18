<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 8:39 PM
 */

namespace Allen\DesignPatterns\LaravelRequestQueue1;


class EncryptCookies implements Middleware
{
    public static function handle(\Closure $next)
    {
        // TODO: Implement handle() method.
        p('对请求的cookie进行解密');
        $next();
        p('对响应的cookie进行加密');
    }
}