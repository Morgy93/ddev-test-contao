<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Contao_Command_DebugPages_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.contao.command.debug_pages.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao.command.debug_pages.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:pages', [], 'Displays the page controller configuration.', false, #[\Closure(name: 'contao.command.debug_pages', class: 'Contao\\CoreBundle\\Command\\DebugPagesCommand')] fn (): \Contao\CoreBundle\Command\DebugPagesCommand => ($container->privates['contao.command.debug_pages'] ?? $container->load('getContao_Command_DebugPagesService')));
    }
}
