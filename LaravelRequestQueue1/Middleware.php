<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 8:30 PM
 */

namespace Allen\DesignPatterns\LaravelRequestQueue1;

interface Middleware
{
    public static function handle();
}