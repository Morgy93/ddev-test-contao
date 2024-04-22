<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Twig_FigureRuntimeService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.twig.figure_runtime' shared service.
     *
     * @return \Contao\CoreBundle\Twig\Runtime\FigureRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Twig/Runtime/FigureRuntime.php';

        $a = ($container->services['contao.image.studio.figure_renderer'] ?? $container->load('getContao_Image_Studio_FigureRendererService'));

        if (isset($container->privates['contao.twig.figure_runtime'])) {
            return $container->privates['contao.twig.figure_runtime'];
        }

        return $container->privates['contao.twig.figure_runtime'] = new \Contao\CoreBundle\Twig\Runtime\FigureRuntime($a);
    }
}
