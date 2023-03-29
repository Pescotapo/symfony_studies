<?php

namespace ContainerFZTZ0xm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Extractor_Visitor_ConstraintService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.extractor.visitor.constraint' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\Visitor\ConstraintVisitor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/Visitor/AbstractVisitor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/Visitor/ConstraintVisitor.php';

        return $container->privates['translation.extractor.visitor.constraint'] = new \Symfony\Component\Translation\Extractor\Visitor\ConstraintVisitor(['Expression', 'Email', 'NotCompromisedPassword', 'When', 'NoSuspiciousCharacters', 'UniqueEntity', 'UserPassword']);
    }
}