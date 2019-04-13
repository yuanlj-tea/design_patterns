<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/5
 * Time: 18:14
 */

require __DIR__ . '/../vendor/autoload.php';

/**
 * laravel请求管道处理
 * Interface Step
 */
interface Step
{
    public static function go(Closure $next);
}

class FirstStep implements Step
{
    public static function go(Closure $next)
    {
        p('开启session，获取数据');
        $next();
        p('保存数据，关闭session');
    }
}

class SecondStep implements Step{
    public static function go(Closure $next)
    {
        p("执行第二步");
        $next();
        p("第二步执行结束");
    }
}

function goFun($step, $className)
{
    return function () use ($step, $className) {
        return $className::go($step);
    };
}

function then()
{
    $steps = ['FirstStep','SecondStep'];
    $prepare = function () {
        p('请求向路由器传递，返回响应');
    };
    $go = array_reduce(array_reverse($steps), 'goFun', $prepare);
    $go();
}

then();