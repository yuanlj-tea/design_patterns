<?php

namespace Allen\DesignPatterns\Annotations;

use Doctrine\Common\Annotations\Annotation\IgnoreAnnotation;
use Doctrine\Common\Annotations\Annotation\Required;
use Doctrine\Common\Annotations\Annotation\Target;


/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
final class TestAnnotations
{
    /**
     * @Required()
     *
     * @var string
     */
    public $name;
}