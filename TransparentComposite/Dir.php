<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 15:55
 */

namespace Allen\DesignPatterns\TransparentComposite;
/**
 * 文件夹
 * Class Dir
 * @package Allen\DesignPatterns\TransparentComposite
 */
class Dir extends Component
{
    protected $children = [];

    public function add(Component $component)
    {
        $this->children[] = $component;
    }

    public function display()
    {
        $nameStr = $this->name .'<br>';
        foreach ($this->children as $k => $v) {
            $nameStr .= '--' . $v->display();
        }
        return $nameStr;
    }
}