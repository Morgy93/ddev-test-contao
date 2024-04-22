<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoNews_Security_NewsArchiveAccessVoterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao_news.security.news_archive_access_voter' shared service.
     *
     * @return \Contao\NewsBundle\Security\Voter\NewsArchiveAccessVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Voter/DataContainer/AbstractDataContainerVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/news-bundle/src/Security/Voter/NewsArchiveAccessVoter.php';

        $a = ($container->privates['security.access.decision_manager'] ?? self::getSecurity_Access_DecisionManagerService($container));

        if (isset($container->privates['contao_news.security.news_archive_access_voter'])) {
            return $container->privates['contao_news.security.news_archive_access_voter'];
        }

        return $container->privates['contao_news.security.news_archive_access_voter'] = new \Contao\NewsBundle\Security\Voter\NewsArchiveAccessVoter($a);
    }
}
