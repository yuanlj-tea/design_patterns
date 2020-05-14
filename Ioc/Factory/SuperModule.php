<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2019/3/8
 * Time: 9:37
 */

namespace Allen\DesignPatterns\Ioc\Factory;
require __DIR__.'/../../vendor/autoload.php';


class SuperModule
{
    public function __construct(array $params)
    {
        $factory = new SuperFactory();

        foreach($params as $moduleName=>$moduleParam){
            $this->power = $factory->make($moduleName,$moduleParam);
        }
    }
}

$params = [
    'A' => [1,2],
    'B' => [3]
];
$obj = new SuperModule($params);
var_dump($obj);