<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/30
 * Time: 9:26 PM
 */

namespace Allen\DesignPatterns\SimpleFactory;


class Bad
{
    public function getResult($operate, $num_a, $num_b)
    {
        switch ($operate) {
            case '+':
                return $num_a + $num_b;
                break;
            case '-':
                return $num_a - $num_b;
                break;
            case '*':
                return $num_a * $num_b;
                break;
            case '/':
                if ($num_b == 0) {
                    throw new \InvalidArgumentException('除数不能为0');
                }
                return $num_a / $num_b;
                break;
            default:
                throw new \InvalidArgumentException('不支持的运算');
                break;
        }

    }
}