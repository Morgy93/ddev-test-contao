<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_FormControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'scheb_two_factor.form_controller' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Controller\FormController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Controller/FormController.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/TwoFactorFirewallContext.php';

        return $container->services['scheb_two_factor.form_controller'] = new \Scheb\TwoFactorBundle\Controller\FormController(($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['scheb_two_factor.provider_registry'] ?? self::getSchebTwoFactor_ProviderRegistryService($container)), ($container->services['scheb_two_factor.firewall_context'] ??= new \Scheb\TwoFactorBundle\Security\TwoFactor\TwoFactorFirewallContext([])), ($container->services['security.logout_url_generator'] ?? self::getSecurity_LogoutUrlGeneratorService($container)), ($container->services['contao.security.two_factor.trusted_device_manager'] ?? $container->load('getContao_Security_TwoFactor_TrustedDeviceManagerService')), true);
    }
}
