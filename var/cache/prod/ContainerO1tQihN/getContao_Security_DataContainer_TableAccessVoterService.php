<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_DataContainer_TableAccessVoterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.security.data_container.table_access_voter' shared service.
     *
     * @return \Contao\CoreBundle\Security\Voter\DataContainer\TableAccessVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/DataContainer/TableAccessVoter.php';

        $a = ($container->privates['security.access.decision_manager'] ?? self::getSecurity_Access_DecisionManagerService($container));

        if (isset($container->privates['contao.security.data_container.table_access_voter'])) {
            return $container->privates['contao.security.data_container.table_access_voter'];
        }

        return $container->privates['contao.security.data_container.table_access_voter'] = new \Contao\CoreBundle\Security\Voter\DataContainer\TableAccessVoter($a);
    }
}
