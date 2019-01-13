<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 16:03
 */

namespace Allen\DesignPatterns\TransparentComposite;

require __DIR__.'/../vendor/autoload.php';

/**
 * 透明组合模式
 * Class Index
 * @package Allen\DesignPatterns\TransparentComposite
 */
class Index
{
    public function run()
    {
        $designPatterns = new Dir('design-patterns');

        $classAdapter = new Dir('ClassAdapter');
        $objectAdapter = new Dir('ObjectAdapter');
        $transparentComposite = new Dir('TransparentComposite');

        $designPatterns->add($classAdapter);
        $designPatterns->add($objectAdapter);
        $designPatterns->add($transparentComposite);

        $componentFile = new File('Component.php');
        $dirFile = new File('Dir.php');
        $fileFile = new File('File.php');
        $indexFile = new File('index.php');

        $transparentComposite->add($componentFile);
        $transparentComposite->add($dirFile);
        $transparentComposite->add($fileFile);
        $transparentComposite->add($indexFile);

        echo $designPatterns->display();

    }
}


$obj = new Index();
$obj->run();