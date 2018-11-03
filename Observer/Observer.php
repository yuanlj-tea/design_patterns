<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 5:20 PM
 */

namespace Allen\DesignPatterns\Observer;

/**
 * 观察者接口
 * Interface Observer
 * @package Allen\DesignPatterns\Observer
 */
interface Observer
{
    public function doActor(Observables $obs);
}