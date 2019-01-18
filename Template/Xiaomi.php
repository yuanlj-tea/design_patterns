<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/5
 * Time: 12:19 AM
 */

namespace Allen\DesignPatterns\Template;


class Xiaomi extends Phone
{
    public function showLogo()
    {
        p('小米电视');
    }
}