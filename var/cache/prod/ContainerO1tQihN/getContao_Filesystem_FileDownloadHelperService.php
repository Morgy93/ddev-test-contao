<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Filesystem_FileDownloadHelperService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.filesystem.file_download_helper' shared service.
     *
     * @return \Contao\CoreBundle\Filesystem\FileDownloadHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/FileDownloadHelper.php';

        return $container->privates['contao.filesystem.file_download_helper'] = new \Contao\CoreBundle\Filesystem\FileDownloadHelper(($container->services['uri_signer'] ??= new \Symfony\Component\HttpFoundation\UriSigner($container->getEnv('APP_SECRET'))));
    }
}
