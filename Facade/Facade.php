<?php
/**
 * Created by PhpStorm.
 * User: yuanlj
 * Date: 2018/11/2
 * Time: 16:36
 */

namespace Allen\DesignPatterns\Facade;


class Facade
{
    public $file;

    public function __construct()
    {
        $this->file = new File();
        $this->encrypt = new Encrypt();
    }

    public function encryptContent()
    {
        p($this->file->getContent());
        p($this->encrypt->encrypt());
    }
}