<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/9
 * Time: 14:24
 */

namespace Allen\DesignPatterns\Singleton\TraitSingleton;

require __DIR__.'/../../vendor/autoload.php';

class Index
{
    use Sinleton;

    public function test()
    {
        p('trait singleton');
    }
}

hoops();

$obj = Index::getInstance();
$obj->test();