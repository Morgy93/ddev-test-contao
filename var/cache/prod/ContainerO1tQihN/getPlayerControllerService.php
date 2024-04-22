<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlayerControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\ContentElement\PlayerController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\PlayerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/PlayerController.php';

        $container->services['Contao\\CoreBundle\\Controller\\ContentElement\\PlayerController'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\PlayerController(($container->privates['contao.filesystem.virtual.files'] ?? $container->load('getContao_Filesystem_Virtual_FilesService')));

        $instance->setContainer(($container->privates['.service_locator.gSfX.Ym'] ?? $container->load('get_ServiceLocator_GSfX_YmService'))->withContext('Contao\\CoreBundle\\Controller\\ContentElement\\PlayerController', $container));

        return $instance;
    }
}
