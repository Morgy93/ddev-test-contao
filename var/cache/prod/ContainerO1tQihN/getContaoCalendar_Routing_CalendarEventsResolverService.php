<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoCalendar_Routing_CalendarEventsResolverService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao_calendar.routing.calendar_events_resolver' shared service.
     *
     * @return \Contao\CalendarBundle\Routing\CalendarEventsResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Routing/Content/ContentUrlResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/calendar-bundle/src/Routing/CalendarEventsResolver.php';

        return $container->privates['contao_calendar.routing.calendar_events_resolver'] = new \Contao\CalendarBundle\Routing\CalendarEventsResolver(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)));
    }
}
