<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 15:25
 */

namespace Allen\DesignPatterns\SafeComposite;


class Dir extends Component
{
    /**
     * 节点
     * @var array
     */
    protected $children = [];

    /**
     * 添加子节点
     * @param Component $component
     */
    public function add(Component $component)
    {
        $this->children[] = $component;
    }
    
    public function display()
    {
        $str = $this->name.'<br>';
        foreach ($this->children as $k=>$v){
            $str .= '--'.$v->display();
        }

        return $str;
    }
}