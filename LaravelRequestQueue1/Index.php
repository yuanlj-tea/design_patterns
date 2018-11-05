<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 8:42 PM
 */

namespace Allen\DesignPatterns\LaravelRequestQueue1;

require __DIR__ . '/../vendor/autoload.php';

function getSlice()
{
    return function ($stack, $pipe) {
        return function () use ($stack, $pipe) {
            return $pipe::handle($stack);
        };
    };
}


function then()
{
    $pipes = [
        "CheckForMaintenanceMode",
        "EncryptCookies",
        "AddQueuedCookiesToResponse",
        "StartSession",
        "ShareErrorsFromSession",
        "VerifyCsrfToken"
    ];

    $firstSlice = function () {
        p('请求向路由器传递，返回响应');
    };

    $pipes = array_reverse($pipes);

    $pipes = array_map(function($v){
        return '\Allen\DesignPatterns\LaravelRequestQueue1\\'.$v;
    },$pipes);
//p($pipes,1);

    hoops();

    call_user_func(
        array_reduce($pipes,getSlice(),$firstSlice)
    );
}

then();