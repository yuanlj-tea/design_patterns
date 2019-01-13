<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 20:21
 */

namespace Allen\DesignPatterns\Flyweight;

require __DIR__.'/../vendor/autoload.php';


/**
 * 享元模式
 * Class Index
 * @package Allen\DesignPatterns\Flyweight
 */
class Index
{
    public function run()
    {
        $flyweight = new FlyweightFactory();
        $lina = $flyweight->getFlyweight('170cm 的模特');
        $lina->show('第一件L号衣服');

        $lina2 = $flyweight->getFlyweight('170cm 的模特');
        $lina2->show('第9件L号衣服');

        pp($lina === $lina2,.1);

        $mm = $flyweight->getFlyweight('180cm 的模特');
        $mm->show('第一件XXL号衣服');

        $lisa = new UnsharedConcreteFlyweight('190cm 的模特');
        $lisa->show('第一件XXXL号的衣服');
        $lisa->delete();
        $lisa->show('第一件XXXL号的衣服');


        $flyweight->dumpFlyweight();


    }
}
hoops();

$obj = new Index();
$obj->run();