<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Image_ImagineSvgService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.image.imagine_svg' shared service.
     *
     * @return \Contao\ImagineSvg\Imagine
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Factory/ClassFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/ImagineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/imagine/imagine/src/Image/AbstractImagine.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/imagine-svg/src/Imagine.php';

        return $container->services['contao.image.imagine_svg'] = new \Contao\ImagineSvg\Imagine();
    }
}