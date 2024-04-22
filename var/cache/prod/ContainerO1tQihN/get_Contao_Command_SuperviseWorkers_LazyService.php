<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Contao_Command_SuperviseWorkers_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.contao.command.supervise_workers.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao.command.supervise_workers.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('contao:supervise-workers', [], 'Supervises the Contao workers.', false, #[\Closure(name: 'contao.command.supervise_workers', class: 'Contao\\CoreBundle\\Command\\SuperviseWorkersCommand')] fn (): \Contao\CoreBundle\Command\SuperviseWorkersCommand => ($container->privates['contao.command.supervise_workers'] ?? $container->load('getContao_Command_SuperviseWorkersService')));
    }
}
