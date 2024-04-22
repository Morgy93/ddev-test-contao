<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ContaoManager_Command_DotenvDump_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.contao_manager.command.dotenv_dump.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao_manager.command.dotenv_dump.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('dotenv:dump', [], 'Compile .env files to .env.local.php', false, #[\Closure(name: 'contao_manager.command.dotenv_dump', class: 'Symfony\\Component\\Dotenv\\Command\\DotenvDumpCommand')] fn (): \Symfony\Component\Dotenv\Command\DotenvDumpCommand => ($container->privates['contao_manager.command.dotenv_dump'] ?? $container->load('getContaoManager_Command_DotenvDumpService')));
    }
}
