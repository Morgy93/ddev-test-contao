<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_ContentElement_AccordionService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.fragment._contao.content_element.accordion' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\AccordionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AccordionController.php';

        $container->services['contao.fragment._contao.content_element.accordion'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\AccordionController(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)));

        $a = $container->load('get_ServiceLocator_GSfX_Ym_Contao_Fragment_Contao_ContentElement_AccordionService');

        $instance->setContainer($a);
        $instance->setFragmentOptions(['type' => 'accordion', 'category' => 'miscellaneous', 'template' => 'content_element/accordion', 'method' => NULL, 'renderer' => NULL, 'nestedFragments' => true, 'debugController' => 'Contao\\CoreBundle\\Controller\\ContentElement\\AccordionController']);
        $instance->setContainer($a);

        return $instance;
    }
}
