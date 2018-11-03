<?php

/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 11:45 PM
 */

function test($i)
{

    $p = [];

    $c = $i - 1;

    if ($c >= 1) {
//        $p[] = $c;
        test($c);
        $p[] = $c;

    }

    return $p;
}

$p = test(3);
// echo '<pre>';
print_r($p);
die;