<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DataContainer_PageRoutingService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.listener.data_container.page_routing' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\PageRoutingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/PageRoutingListener.php';

        return $container->services['contao.listener.data_container.page_routing'] = new \Contao\CoreBundle\EventListener\DataContainer\PageRoutingListener(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), ($container->services['contao.routing.page_registry'] ?? self::getContao_Routing_PageRegistryService($container)), ($container->services['twig'] ?? self::getTwigService($container)));
    }
}
