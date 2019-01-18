<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 16:02
 */

namespace Allen\DesignPatterns\TransparentComposite;

/**
 * 文件
 * Class File
 * @package Allen\DesignPatterns\TransparentComposite
 */
class File extends Component
{
    public function add(Component $component)
    {
        throw new \Exception('文件不能添加子节点');
    }

    public function display()
    {
        return '--' . $this->name .'<br>';
    }
}