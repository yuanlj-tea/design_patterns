<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/5
 * Time: 17:18
 */

namespace Allen\DesignPatterns\Decorator1;

require __DIR__.'/../vendor/autoload.php';

/**
 * 装饰者模式:是在开放-关闭原则下实现动态添加或减少功能的一种方式;
 * 以Laravel为例,在解析请求生成响应之前或之后需要经过中间件的处理;
 * 主要包括验证维护模式、cookier加密、开启会话、CSRF保护等等;
 * 而这个处理有些是在生成响应之前,有些是在生成响应之后,在实际开发过程中有可能还需要添加新的处理功能;
 * 如果在不修改原有类的基础上动态地添加或减少处理功能将使框架可扩展性大大增强,而这种需求正好被装饰者模式解决
 * Class Index
 * @package Allen\DesignPatterns\Decorator1
 */
class Index
{
    public function run()
    {
        $obj = new LiuYf('刘亦菲');
        $shoes = new Shoes($obj);
        $skirt = new Skirt($shoes);
        $fire = new Fire($skirt);

        $fire->display();
    }
}

$index = new Index();
$index->run();