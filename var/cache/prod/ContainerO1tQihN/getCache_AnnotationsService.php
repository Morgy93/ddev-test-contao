<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_AnnotationsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['monolog.logger.cache'] ?? self::getMonolog_Logger_CacheService($container));

        if (isset($container->privates['cache.annotations'])) {
            return $container->privates['cache.annotations'];
        }

        return $container->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Pf2-FX9eYL', 0, $container->getParameter('container.build_id'), ($container->targetDir.''.'/pools/system'), $a);
    }
}
