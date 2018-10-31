<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2018/10/31
 * Time: 12:08 AM
 */

namespace Allen\DesignPatterns\AbstractFactory;

interface Factory
{
    function createUser();

    function createArticle();
}