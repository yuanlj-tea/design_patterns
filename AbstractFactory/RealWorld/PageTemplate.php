<?php

namespace Allen\DesignPatterns\AbstractFactory\RealWorld;

/**
 * This is another Abstract Product type, which describes whole page templates.
 */
interface PageTemplate
{
    public function getTemplateString(): string;
}