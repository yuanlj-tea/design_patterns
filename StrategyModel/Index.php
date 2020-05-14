<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2019/5/14
 * Time: 9:52 PM
 */

namespace Allen\DesignPatterns\StrategyModel;

require_once __DIR__.'/../vendor/autoload.php';

class Index
{
    /**
     * @var UserStrategy
     */
    private $strategy;

    public function run()
    {
        $this->strategy->showAd();
        $this->strategy->showCategory();
    }

    public function setStrategy(UserStrategy $userStrategy)
    {
        $this->strategy = $userStrategy;
    }
}

$obj = new Index();
$obj->setStrategy(new MaleStrategy());
// $obj->setStrategy(new FemailStrategy());
$obj->run();