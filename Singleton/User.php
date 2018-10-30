<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/29
 * Time: 11:16 PM
 */

class user {
    public $name;
    public $id;

    function __construct() {    // 给id成员赋一个uniq id
        $this->id = 123;
    }

    function __sleep() {       //此处不串行化id成员
        return(array('name'));
    }

    function __wakeup() {
        $this->id = 456;
    }
}

$u = new user();
$u->name = "Leo";
$s = serialize($u); //serialize串行化对象u，此处不串行化id属性，id值被抛弃
$u2 = unserialize($s); //unserialize反串行化，id值被重新赋值

var_dump($u);
var_dump($s);
var_dump($u2);