<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 2:40 PM
 */

namespace Allen\DesignPatterns\Strategy;


class Strategy
{
    private $item;

    public function getItem($itemName)
    {
        try{
            $class = new \ReflectionClass($itemName);
            $this->item = $class->newInstance();
//            pd($this->item,.1);
        }catch(\ReflectionException $e){
            throw new \ReflectionException($e->getMessage());
//            throw new \Exception($e->getMessage());
        }

    }

    public function Lrotate()
    {
        $this->item->Lrotate();
    }

    public function Rrotate()
    {
        $this->item->Rrotate();
    }
}