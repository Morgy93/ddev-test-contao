<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Image_ResizerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.image.resizer' shared service.
     *
     * @return \Contao\CoreBundle\Image\Resizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/ResizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/Resizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/DeferredResizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/DeferredResizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Image/Resizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/ResizeCalculator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $container->services['contao.image.resizer'] = new \Contao\CoreBundle\Image\Resizer((\dirname(__DIR__, 4).'/assets/images'), $container->getEnv('APP_SECRET'), ($container->privates['contao.image.resize_calculator'] ??= new \Contao\Image\ResizeCalculator()), ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()), ($container->privates['contao.image.deferred_image_storage'] ?? $container->load('getContao_Image_DeferredImageStorageService')), ($container->services['contao.image.metadata'] ?? $container->load('getContao_Image_MetadataService')));
    }
}
