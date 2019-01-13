<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/11/3
 * Time: 5:07 PM
 */

namespace Allen\DesignPatterns\Observer;


class Saler implements Observables
{

    // 保存观察者的容器
    protected $obs = [];

    protected $range = 0;


    /**
     * 注册观察者
     */
    public function attach(Observer $ob)
    {
        $this->obs[] = $ob;
    }

    /**
     * 删除观察者
     */
    public function detach(Observer $ob)
    {
        foreach($this->obs as $o){
            if($o != $ob){
                $this->obs[] = $o;
            }
        }
    }

    /**
     * 通知观察者
     */
    public function notify()
    {
        foreach ($this->obs as $v){
            $v->doActor($this);
        }
    }

    /**
     * 增加价格
     */
    public function incresePrice($range)
    {
        $this->range = $range;
    }

    /**
     * 获取增加的价格
     * @return int
     */
    public function getIncRange()
    {
        return $this->range;
    }
}