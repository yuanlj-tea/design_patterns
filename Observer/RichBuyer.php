<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 5:16 PM
 */

namespace Allen\DesignPatterns\Observer;

/**
 * 观察者
 * Class RichBuyer
 * @package Allen\DesignPatterns\Observer
 */
class RichBuyer extends Buyer
{
    public function doActor(Observables $obs)
    {
        p('价格再高也买');
    }
}