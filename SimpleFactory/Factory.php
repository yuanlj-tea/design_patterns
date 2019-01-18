<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/30
 * Time: 10:21 PM
 */

namespace Allen\DesignPatterns\SimpleFactory;


class Factory
{
    public function createObj($op)
    {
        switch ($op){
            case '+':
                $obj = new Add();
                break;
            case '-':
                $obj = new Sub();
                break;
            default:
                throw new \InvalidArgumentException('无效的参数');
        }
        return $obj;
    }
}