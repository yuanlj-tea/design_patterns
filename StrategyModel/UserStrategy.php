<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/5/14
 * Time: 9:46 PM
 */

namespace Allen\DesignPatterns\StrategyModel;

interface UserStrategy
{
    public function showAd();

    public function showCategory();
}