<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2019/3/7
 * Time: 19:44
 */

namespace Allen\DesignPatterns\Ioc\Factory;


class SuperFactory
{
    public function make($className,$params)
    {
        switch ($className){
            case 'A':
                return new A($params[0],$params[1]);
                break;
            case 'B':
                return new B($params[0]);
                break;
            default:
                throw new \Exception('无效的'.$className);
        }
    }
}