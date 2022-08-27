<?php

namespace Allen\DesignPatterns\AbstractFactory\RealWorld;

/**
 * The Twig variant of the whole page templates.
 */
class TwigPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content">{{ content }}</article>
        </div>
        HTML;
    }
}