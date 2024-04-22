<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioSecurity_CspReporterControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'nelmio_security.csp_reporter_controller' shared service.
     *
     * @return \Nelmio\SecurityBundle\Controller\ContentSecurityPolicyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/src/Controller/ContentSecurityPolicyController.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/src/ContentSecurityPolicy/Violation/Log/Logger.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/src/ContentSecurityPolicy/Violation/Log/LogFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/src/ContentSecurityPolicy/Violation/Log/LogFormatter.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/src/ContentSecurityPolicy/Violation/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/src/ContentSecurityPolicy/Violation/Filter/NoiseDetectorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/src/ContentSecurityPolicy/Violation/Filter/DomainsNoiseDetector.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/src/ContentSecurityPolicy/Violation/Filter/DomainsRegexNoiseDetector.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/src/ContentSecurityPolicy/Violation/Filter/SchemesNoiseDetector.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/src/ContentSecurityPolicy/Violation/Filter/InjectedScriptsNoiseDetector.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/security-bundle/src/ContentSecurityPolicy/Violation/Filter/BrowserBugsNoiseDetector.php';
        include_once \dirname(__DIR__, 4).'/vendor/ua-parser/uap-php/src/AbstractParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/ua-parser/uap-php/src/ParserFactoryMethods.php';
        include_once \dirname(__DIR__, 4).'/vendor/ua-parser/uap-php/src/Parser.php';

        $a = new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\Filter();
        $a->addNoiseDetector(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\DomainsNoiseDetector());
        $a->addNoiseDetector(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\DomainsRegexNoiseDetector());
        $a->addNoiseDetector(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\SchemesNoiseDetector());
        $a->addNoiseDetector(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\InjectedScriptsNoiseDetector());
        $a->addNoiseDetector(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Filter\BrowserBugsNoiseDetector(\UAParser\Parser::create()));

        return $container->services['nelmio_security.csp_reporter_controller'] = new \Nelmio\SecurityBundle\Controller\ContentSecurityPolicyController(new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Log\Logger(($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), new \Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Log\LogFormatter(), 'notice'), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), $a);
    }
}
