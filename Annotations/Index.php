<?php


namespace Allen\DesignPatterns\Annotations;

require_once __DIR__ . '/../vendor/autoload.php';


use Doctrine\Common\Annotations\AnnotationReader;

// 注解的常见使用范围：文档生成、数据检查、运行时的动态处理、编译时的动态处理
class Index
{
    public function run()
    {
        $reflectionClass = new \ReflectionClass(Test::class);
        $reader = new AnnotationReader();

        $annotaion = $reader->getPropertyAnnotation($reflectionClass->getProperty('name'), TestAnnotations::class);
        pp($annotaion->name);
    }
}

$obj = new Index();
$obj->run();