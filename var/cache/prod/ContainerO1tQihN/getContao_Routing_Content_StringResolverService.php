<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Routing_Content_StringResolverService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.routing.content.string_resolver' shared service.
     *
     * @return \Contao\CoreBundle\Routing\Content\StringResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Routing/Content/ContentUrlResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Routing/Content/StringResolver.php';

        $a = ($container->services['contao.insert_tag.parser'] ?? $container->load('getContao_InsertTag_ParserService'));

        if (isset($container->privates['contao.routing.content.string_resolver'])) {
            return $container->privates['contao.routing.content.string_resolver'];
        }
        $b = ($container->privates['url_helper'] ?? self::getUrlHelperService($container));

        if (isset($container->privates['contao.routing.content.string_resolver'])) {
            return $container->privates['contao.routing.content.string_resolver'];
        }

        return $container->privates['contao.routing.content.string_resolver'] = new \Contao\CoreBundle\Routing\Content\StringResolver($a, $b, ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['router.request_context'] ?? self::getRouter_RequestContextService($container)));
    }
}
