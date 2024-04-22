<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_ManagersLocatorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.managers_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.authenticator.managers_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['contao_backend' => #[\Closure(name: 'security.authenticator.manager.contao_backend', class: 'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticatorManager')] fn () => ($container->privates['security.authenticator.manager.contao_backend'] ?? $container->load('getSecurity_Authenticator_Manager_ContaoBackendService')), 'contao_frontend' => #[\Closure(name: 'security.authenticator.manager.contao_frontend', class: 'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticatorManager')] fn () => ($container->privates['security.authenticator.manager.contao_frontend'] ?? $container->load('getSecurity_Authenticator_Manager_ContaoFrontendService'))]);
    }
}
