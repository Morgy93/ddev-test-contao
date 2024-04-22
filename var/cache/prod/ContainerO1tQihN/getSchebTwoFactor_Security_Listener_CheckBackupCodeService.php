<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_Security_Listener_CheckBackupCodeService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'scheb_two_factor.security.listener.check_backup_code' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Http\EventListener\CheckBackupCodeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Http/EventListener/AbstractCheckCodeListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-backup-code/Security/Http/EventListener/CheckBackupCodeListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-backup-code/Security/TwoFactor/Backup/BackupCodeManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/TwoFactor/BackupCodeManager.php';

        return $container->privates['scheb_two_factor.security.listener.check_backup_code'] = new \Scheb\TwoFactorBundle\Security\Http\EventListener\CheckBackupCodeListener(($container->privates['scheb_two_factor.provider_preparation_recorder'] ?? self::getSchebTwoFactor_ProviderPreparationRecorderService($container)), ($container->services['contao.security.two_factor.backup_code_manager'] ??= new \Contao\CoreBundle\Security\TwoFactor\BackupCodeManager()));
    }
}