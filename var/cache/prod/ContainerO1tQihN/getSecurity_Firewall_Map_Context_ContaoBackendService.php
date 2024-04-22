<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_ContaoBackendService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.firewall.map.context.contao_backend' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.firewall.map.context.contao_backend'])) {
            return $container->privates['security.firewall.map.context.contao_backend'];
        }
        $b = ($container->privates['contao.security.login_authenticator.contao_backend'] ?? $container->load('getContao_Security_LoginAuthenticator_ContaoBackendService'));

        if (isset($container->privates['security.firewall.map.context.contao_backend'])) {
            return $container->privates['security.firewall.map.context.contao_backend'];
        }
        $c = ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container));

        if (isset($container->privates['security.firewall.map.context.contao_backend'])) {
            return $container->privates['security.firewall.map.context.contao_backend'];
        }
        $d = ($container->privates['security.event_dispatcher.contao_backend'] ?? self::getSecurity_EventDispatcher_ContaoBackendService($container));

        if (isset($container->privates['security.firewall.map.context.contao_backend'])) {
            return $container->privates['security.firewall.map.context.contao_backend'];
        }
        $e = ($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container));

        return $container->privates['security.firewall.map.context.contao_backend'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? self::getSecurity_ContextListener_0Service($container));
            yield 2 => ($container->privates['security.firewall.authenticator.contao_backend'] ?? $container->load('getSecurity_Firewall_Authenticator_ContaoBackendService'));
            yield 3 => ($container->privates['security.authentication.switchuser_listener.contao_backend'] ?? $container->load('getSecurity_Authentication_SwitchuserListener_ContaoBackendService'));
            yield 4 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($e, ($container->services['security.authentication.trust_resolver'] ?? self::getSecurity_Authentication_TrustResolverService($container)), $a, 'contao_backend', $b, NULL, NULL, $c, false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($e, $a, $d, ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'contao_backend_logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('contao_backend', 'contao.security.user_checker', 'contao.routing.backend_matcher', true, false, 'contao.security.backend_user_provider', 'contao_backend', 'contao.security.login_authenticator.contao_backend', NULL, NULL, ['switch_user', 'login_throttling', 'contao_login', 'login_link'], ['parameter' => '_switch_user', 'role' => 'ROLE_ALLOWED_TO_SWITCH', 'target_route' => NULL], ['path' => 'contao_backend_logout', 'enable_csrf' => NULL, 'csrf_token_id' => 'logout', 'csrf_parameter' => '_csrf_token', 'target' => '/', 'invalidate_session' => true, 'clear_site_data' => [], 'delete_cookies' => []]));
    }
}