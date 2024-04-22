<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Messenger_WorkerListenerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.messenger.worker_listener' shared service.
     *
     * @return \Contao\CoreBundle\Messenger\EventListener\WorkerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Messenger/EventListener/WorkerListener.php';

        $a = ($container->privates['contao.messenger.auto_fallback_notifier'] ?? $container->load('getContao_Messenger_AutoFallbackNotifierService'));

        if (isset($container->privates['contao.messenger.worker_listener'])) {
            return $container->privates['contao.messenger.worker_listener'];
        }

        return $container->privates['contao.messenger.worker_listener'] = new \Contao\CoreBundle\Messenger\EventListener\WorkerListener($a);
    }
}
