<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/5/14
 * Time: 9:51 PM
 */

namespace Allen\DesignPatterns\StrategyModel;


class FemailStrategy implements UserStrategy
{
    public function showAd()
    {
        // TODO: Implement showAd() method.
        pp("女性ad");
    }

    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        pp("女性catgory");
    }

}