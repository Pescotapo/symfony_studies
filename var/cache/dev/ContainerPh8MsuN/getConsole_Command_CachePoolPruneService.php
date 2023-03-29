<?php

namespace ContainerPh8MsuN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolPruneService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $containerRef = $container->ref;

        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php';

        $container->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () use ($containerRef) {
            $container = $containerRef->get();

            yield 'cache.app' => ($container->services['cache.app'] ?? self::getCache_AppService($container));
            yield 'cache.system' => ($container->services['cache.system'] ?? self::getCache_SystemService($container));
            yield 'cache.validator' => ($container->privates['cache.validator'] ?? self::getCache_ValidatorService($container));
            yield 'cache.serializer' => ($container->privates['cache.serializer'] ?? self::getCache_SerializerService($container));
            yield 'cache.annotations' => ($container->privates['cache.annotations'] ?? self::getCache_AnnotationsService($container));
            yield 'cache.property_info' => ($container->privates['cache.property_info'] ?? self::getCache_PropertyInfoService($container));
            yield 'cache.messenger.restart_workers_signal' => ($container->privates['cache.messenger.restart_workers_signal'] ?? self::getCache_Messenger_RestartWorkersSignalService($container));
            yield 'cache.scheduler' => ($container->privates['cache.scheduler'] ?? self::getCache_SchedulerService($container));
            yield 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? self::getCache_ValidatorExpressionLanguageService($container));
            yield 'cache.doctrine.orm.default.result' => ($container->privates['cache.doctrine.orm.default.result'] ?? self::getCache_Doctrine_Orm_Default_ResultService($container));
            yield 'cache.doctrine.orm.default.query' => ($container->privates['cache.doctrine.orm.default.query'] ?? self::getCache_Doctrine_Orm_Default_QueryService($container));
            yield 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? self::getCache_SecurityExpressionLanguageService($container));
            yield 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? self::getCache_SecurityIsGrantedAttributeExpressionLanguageService($container));
        }, 13));

        $instance->setName('cache:pool:prune');
        $instance->setDescription('Prune cache pools');

        return $instance;
    }
}
