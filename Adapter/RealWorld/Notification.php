<?php

namespace Allen\DesignPatterns\Adapter\RealWorld;

/**
 * The Target interface represents the interface that your application's classes
 * already follow.
 */
interface Notification
{
    public function send(string $title, string $message);
}