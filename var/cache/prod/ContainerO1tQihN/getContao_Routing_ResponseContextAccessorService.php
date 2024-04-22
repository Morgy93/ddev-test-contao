<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Routing_ResponseContextAccessorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.routing.response_context_accessor' shared service.
     *
     * @return \Contao\CoreBundle\Routing\ResponseContext\ResponseContextAccessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Routing/ResponseContext/ResponseContextAccessor.php';

        return $container->services['contao.routing.response_context_accessor'] = new \Contao\CoreBundle\Routing\ResponseContext\ResponseContextAccessor(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
