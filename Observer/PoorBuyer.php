<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 5:13 PM
 */

namespace Allen\DesignPatterns\Observer;

/**
 * 观察者
 * Class PoorBuyer
 * @package Allen\DesignPatterns\Observer
 */
class PoorBuyer extends Buyer
{
    public function doActor(Observables $obs)
    {
        if($obs->getIncRange() > 10){
            p('价格太高了不买了');
        }else{
            p('价格还能接受，买点吧');
        }
    }
}