<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Image_PictureFactoryService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.image.picture_factory' shared service.
     *
     * @return \Contao\CoreBundle\Image\PictureFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Image/PictureFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Image/PictureFactory.php';

        $container->services['contao.image.picture_factory'] = $instance = new \Contao\CoreBundle\Image\PictureFactory(($container->services['contao.image.picture_generator'] ?? $container->load('getContao_Image_PictureGeneratorService')), ($container->services['contao.image.factory'] ?? $container->load('getContao_Image_FactoryService')), ($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), false, $container->parameters['contao.image.imagine_options']);

        $instance->setPreserveMetadataFields(['xmp' => ['http://purl.org/dc/elements/1.1/' => ['rights', 'creator'], 'http://ns.adobe.com/photoshop/1.0/' => ['Source', 'Credit']], 'iptc' => ['2#116', '2#080', '2#115', '2#110'], 'exif' => ['IFD0' => ['Copyright', 'Artist']], 'png' => ['Copyright', 'Author', 'Source', 'Disclaimer'], 'gif' => ['Comment']]);

        return $instance;
    }
}