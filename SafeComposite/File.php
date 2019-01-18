<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 15:35
 */

namespace Allen\DesignPatterns\SafeComposite;


class File extends Component
{

    public function display()
    {
        return '--'.$this->name.'<br>';
    }
}