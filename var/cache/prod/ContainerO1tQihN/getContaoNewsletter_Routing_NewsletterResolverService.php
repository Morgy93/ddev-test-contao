<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoNewsletter_Routing_NewsletterResolverService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao_newsletter.routing.newsletter_resolver' shared service.
     *
     * @return \Contao\NewsletterBundle\Routing\NewsletterResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Routing/Content/ContentUrlResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/newsletter-bundle/src/Routing/NewsletterResolver.php';

        return $container->privates['contao_newsletter.routing.newsletter_resolver'] = new \Contao\NewsletterBundle\Routing\NewsletterResolver(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)));
    }
}
