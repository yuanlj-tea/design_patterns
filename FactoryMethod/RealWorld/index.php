<?php

namespace Allen\DesignPatterns\FactoryMethod\RealWorld;


require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * 工厂方法模式
 * 链接：https://refactoringguru.cn/design-patterns/factory-method
 * @param SocialNetworkPoster $poster
 */
function clientCode(SocialNetworkPoster $poster)
{
    $poster->post('Hello world!');
    // $poster->post("I had a large hamburger this morning!");
}

clientCode(new FacebookPoster("john_smith", "******"));
// clientCode(new LinkedInPoster("john_smith@example.com", "******"));