<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 15:37
 */

namespace Allen\DesignPatterns\SafeComposite;

require __DIR__.'/../vendor/autoload.php';

/**
 * 透明组合模式
 * Class Index
 * @package Allen\DesignPatterns\SafeComposite
 */
class Index
{
    public function run()
    {
        $designPatterns = new Dir('design_patterns');

        $classDapter = new Dir('classDapter');
        $objectDapter = new Dir('objectDapter');
        $safeComposite = new Dir('safeComposite');

        // 为design_patterns文件夹添加子文件夹
        $designPatterns->add($classDapter);
        $designPatterns->add($objectDapter);
        $designPatterns->add($safeComposite);

        $componentFile = new File('Component.php');
        $dirFile = new File('Dir.php');
        $fileFile = new File('File.php');
        $indexFile = new File('index.php');

        // 为safeComposite添加子文件
        $safeComposite->add($componentFile);
        $safeComposite->add($dirFile);
        $safeComposite->add($fileFile);
        $safeComposite->add($indexFile);

        p($designPatterns->display());
    }
}

$obj = new Index();
$obj->run();