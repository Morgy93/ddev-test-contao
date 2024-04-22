<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImagesController2Service extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\ImagesController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ImagesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ImagesController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $container->services['Contao\\CoreBundle\\Controller\\ImagesController'] = new \Contao\CoreBundle\Controller\ImagesController(($container->services['contao.image.factory'] ?? $container->load('getContao_Image_FactoryService')), ($container->services['contao.image.resizer'] ?? $container->load('getContao_Image_ResizerService')), (\dirname(__DIR__, 4).'/assets/images'), ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()));
    }
}
