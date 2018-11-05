<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/4
 * Time: 9:10 PM
 */

namespace Allen\DesignPatterns\DI;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 依赖注入,控制反转
 * Class Index
 * @package Allen\DesignPatterns\DI
 */
class Index
{

    // 命名空间前缀
    private $_namespace = '\\'.__NAMESPACE__.'\\';

    // 容器类
    protected $continer;

    public function __construct()
    {
        $this->continer = new Container();
    }

    public function run()
    {
        $a = $this->continer->get($this->_namespace.'A');
        $a->test();
    }

    public function runTest()
    {
        $this->continer->set('Test',new Test());

        $test = $this->continer->get('Test');
        $test->test();
    }

    public function runClosure()
    {
        $this->continer->set('foo',function($container,$params,$config){
            pp($container);
            p($params);
            p($config);
        });

        $this->continer->get('foo',['name'=>'foo'],['key'=>'test']);
    }

}

hoops();

$obj = new Index();
$obj->run();

$obj->runTest();

$obj->runClosure();