<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 9:33 PM
 */

//namespace Allen\DesignPatterns\Ioc;

require __DIR__.'/../vendor/autoload.php';

/**
 *
 * 工具类，使用该类来实现自动依赖注入。
 *
 */
class Ioc
{

    // 获得类的对象实例
    public static function getInstance($className)
    {

        $paramArr = self::getMethodParams($className);
//pd($paramArr,.1);
        return (new ReflectionClass($className))->newInstanceArgs($paramArr);
    }

    /**
     * 执行类的方法
     * @param  [type] $className  [类名]
     * @param  [type] $methodName [方法名称]
     * @param  [type] $params     [额外的参数]
     * @return [type]             [description]
     */
    public static function make($className, $methodName, $params = [])
    {

        // 获取类的实例
        $instance = self::getInstance($className);

        // 获取该方法所需要依赖注入的参数
        $paramArr = self::getMethodParams($className, $methodName);

        return $instance->{$methodName}(...array_merge($paramArr, $params));
    }

    /**
     * 获得类的方法参数，只获得有类型的参数
     * @param  [type] $className   [description]
     * @param  [type] $methodsName [description]
     * @return [type]              [description]
     */
    protected static function getMethodParams($className, $methodsName = '__construct')
    {

        // 通过反射获得该类
        $class = new ReflectionClass($className);
        $paramArr = []; // 记录参数，和参数类型

        // 判断该类是否有构造函数
        if ($class->hasMethod($methodsName)) {
            // 获得构造函数
            $construct = $class->getMethod($methodsName);

            // 判断构造函数是否有参数
            $params = $construct->getParameters();

            if (count($params) > 0) {

                // 判断参数类型
                foreach ($params as $key => $param) {

                    if ($paramClass = $param->getClass()) {

                        // 获得参数类型名称
                        $paramClassName = $paramClass->getName();

                        // 获得参数类型
                        $args = self::getMethodParams($paramClassName);
                        $paramArr[] = (new ReflectionClass($paramClass->getName()))->newInstanceArgs($args);
                    }else{
                        $paramArr[] = $param;
                    }
                }
            }
        }

        return $paramArr;
    }

}


class A {

    protected $cObj;

    /**
     * 用于测试多级依赖注入 B依赖A，A依赖C
     * @param C $c [description]
     */
    public function __construct(C $c) {

        $this->cObj = $c;
    }

    public function aa() {

        echo 'this is A->test';
    }

    public function aac() {

        $this->cObj->cc();
    }
}

class B {

    protected $aObj;

    /**
     * 测试构造函数依赖注入
     * @param A $a [使用引来注入A]
     */
    public function __construct(A $a) {

        $this->aObj = $a;
    }

    /**
     * [测试方法调用依赖注入]
     * @param  C      $c [依赖注入C]
     * @param  string $b [这个是自己手动填写的参数]
     * @return [type]    [description]
     */
    public function bb(C $c, $b) {

        $c->cc();
        echo "<br>";

        echo 'params:' . $b;
    }

    /**
     * 验证依赖注入是否成功
     * @return [type] [description]
     */
    public function bbb() {

        $this->aObj->aac();
    }

    public function test()
    {
        echo 'test<br>';
    }
}

class C {

    public function cc() {

        echo 'this is C->cc';
    }
}

hoops();

$bObj = Ioc::getInstance('B');
$bObj->bbb();


//Ioc::make('B', 'bb', ['this is param b']);

//Ioc::make('B','test');

//$bObj = Ioc::getInstance('B');
//$bObj->test();