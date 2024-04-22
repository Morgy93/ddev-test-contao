<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoCalendar_Listener_GeneratePageService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao_calendar.listener.generate_page' shared service.
     *
     * @return \Contao\CalendarBundle\EventListener\GeneratePageListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/calendar-bundle/src/EventListener/GeneratePageListener.php';

        return $container->services['contao_calendar.listener.generate_page'] = new \Contao\CalendarBundle\EventListener\GeneratePageListener(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)));
    }
}
