<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_ProviderInitiatorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'scheb_two_factor.provider_initiator' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderInitiator
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['scheb_two_factor.provider_initiator'] = $container->createProxy('TwoFactorProviderInitiatorGhostB7520f6', static fn () => \TwoFactorProviderInitiatorGhostB7520f6::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorProviderInitiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Authentication/Token/TwoFactorTokenFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Authentication/Token/TwoFactorTokenFactory.php';

        return ($lazyLoad->__construct(($container->privates['scheb_two_factor.provider_registry'] ?? self::getSchebTwoFactor_ProviderRegistryService($container)), new \Scheb\TwoFactorBundle\Security\Authentication\Token\TwoFactorTokenFactory()) && false ?: $lazyLoad);
    }
}
