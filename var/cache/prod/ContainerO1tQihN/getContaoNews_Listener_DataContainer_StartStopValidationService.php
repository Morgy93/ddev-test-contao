<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoNews_Listener_DataContainer_StartStopValidationService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao_news.listener.data_container.start_stop_validation' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\StartStopValidationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/StartStopValidationListener.php';

        return $container->services['contao_news.listener.data_container.start_stop_validation'] = new \Contao\CoreBundle\EventListener\DataContainer\StartStopValidationListener(($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
