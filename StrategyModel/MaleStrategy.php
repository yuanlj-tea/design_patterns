<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/5/14
 * Time: 9:49 PM
 */

namespace Allen\DesignPatterns\StrategyModel;


class MaleStrategy implements UserStrategy
{
    public function showAd()
    {
        pp("男性广告");
    }

    public function showCategory()
    {
        pp("男性category");
    }

}