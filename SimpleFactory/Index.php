<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/30
 * Time: 9:31 PM
 */

namespace Allen\DesignPatterns\SimpleFactory;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * 简单工厂模式测试
 * Class Client
 * @package Allen\DesignPatterns\SimpleFactory
 */
class Client
{
    /**
     * 不好的示例
     */
    public function bad()
    {
        $bad = new Bad();
        $res = $bad->getResult('+',10,20);
//        $res1 = $bad->getResult('/',10,0);
        p($res);
    }

    /**
     * 不好的示例2
     */
    public function bad2()
    {
        $bad2 = new Add();
        $bad2->setA(10);
        $bad2->setB(20);
        $res1 = $bad2->getResult();
        p($res1);

        $bad2->setA(20);
        $bad2->setB(30);
        $res2= $bad2->getResult();
        p($res2);

    }

    /**
     * 相对较好的示例
     * 优点:把由具体类的依赖转换为对工厂类的依赖
     * 缺点:如果要再增加新的运算;需要再修改工厂类;
     * 违反了开放封闭原则(对扩展开放,对修改封闭);
     * 增加新运算应该使用扩展的方式;而不是去修改工厂类
     */
    public function good()
    {
        $factory = new Factory();
        $obj = $factory->createObj('+');
        $obj->setA(20);
        $obj->setB(20);
        $res = $obj->getResult();
        p($res);

    }
}

$obj = new Client();
$obj->bad();

$obj->bad2();

$obj->good();

