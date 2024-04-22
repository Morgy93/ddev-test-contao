<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_Renderer_ListService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'knp_menu.renderer.list' shared service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/Renderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/ListRenderer.php';

        return $container->privates['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(($container->services['knp_menu.matcher'] ?? self::getKnpMenu_MatcherService($container)), [], 'UTF-8');
    }
}
