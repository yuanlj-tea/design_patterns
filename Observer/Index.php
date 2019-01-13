<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 7:07 PM
 */

namespace Allen\DesignPatterns\Observer;

require __DIR__.'/../vendor/autoload.php';

/**
 * 观察者模式
 * Class Index
 * @package Allen\DesignPatterns\Observer
 */
class Index
{
    public function run()
    {
        // 被观察者实例
        $saler = new Saler();

        // 注册观察者
        $saler->attach(new PoorBuyer());
        $saler->attach(new RichBuyer());
        $saler->notify();

        // 涨价
        $saler->incresePrice(10);
        $saler->notify();

        // 涨价
        $saler->incresePrice(30);
        $saler->notify();



    }
}
hoops();

$obj = new Index();
$obj->run();