<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GSfX_Ym_Contao_Fragment_Contao_ContentElement_VimeoService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.service_locator.gSfX.Ym.contao.fragment._contao.content_element.vimeo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return ($container->privates['.service_locator.gSfX.Ym'] ?? $container->load('get_ServiceLocator_GSfX_YmService'))->withContext('contao.fragment._contao.content_element.vimeo', $container);
    }
}
