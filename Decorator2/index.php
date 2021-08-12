<?php


namespace Allen\DesignPatterns\Decorator2;

require __DIR__.'/../vendor/autoload.php';

class index
{
    public function run()
    {
        $draw = new Draw();
        $draw->addDecorator(new ColorDecorator());;
        $draw->addDecorator(new SizeDecorator());
        $draw->draw();
    }
}

$index = new index();
$index->run();