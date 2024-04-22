<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_TwoFactor_ProviderService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.security.two_factor.provider' shared service.
     *
     * @return \Contao\CoreBundle\Security\TwoFactor\Provider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/TwoFactor/Provider.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/TwoFactor/Authenticator.php';

        return $container->privates['contao.security.two_factor.provider'] = new \Contao\CoreBundle\Security\TwoFactor\Provider(($container->services['contao.security.two_factor.authenticator'] ??= new \Contao\CoreBundle\Security\TwoFactor\Authenticator()));
    }
}
