<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 11:23 PM
 */

namespace Allen\DesignPatterns\AbstractFactoryWithReflection;


class Factory
{
    public $db = '';

    public $namespace = "Allen\DesignPatterns\AbstractFactoryWithReflection\\";

    public function __construct()
    {
        $dbConfig = require "./config.php";
        $this->db = $dbConfig['driver'];
    }
    
    public function createUser()
    {
        $class = $this->namespace.$this->db.'User';

        try{
            $ref = new \ReflectionClass($class);

            $user = $ref->newInstance();
        }catch (\ReflectionException $e){
            throw new \ReflectionException($e->getMessage());
        }

        return $user;
    }


    public function createArticle()
    {
        $class = $this->namespace.$this->db.'Article';

        try{
            $ref = new \ReflectionClass($class);

            $user = $ref->newInstance();
        }catch (\ReflectionException $e){
            throw new \ReflectionException($e->getMessage());
        }

        return $user;
    }
}   