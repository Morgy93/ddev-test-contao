<?php

namespace ContainerO1tQihN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationExtractService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'console.command.translation_extract' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';

        $container->privates['console.command.translation_extract'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'en', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [(\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [(\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'), (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), (\dirname(__DIR__, 4).'/vendor/symfony/translation/LocaleSwitcher.php'), (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/src/DateTimeFormatter.php'), (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/BackendCsvImportController.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/BackendPreviewSwitchController.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/AdministratorEmailListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/BackendLocaleListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/BackendRebuildCacheMessageListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/DescriptionListLabelListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/DisableAppConfiguredSettingsListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/DisableCanonicalFieldsListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/EnumOptionsListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/MemberGroupsListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/PageUrlListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/PreviewLinkListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/StartStopValidationListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Twig/Finder/FinderFactory.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/ThemeTemplatesListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/Undo/JumpToParentOperationListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/ValidateCustomRgxpListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/InsertTags/TranslationListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/LocaleSubscriber.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Menu/BackendMenuListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Menu/BackendFavoritesListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Menu/BackendLogoutListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Menu/BackendPreviewListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Widget/CustomRgxpListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Widget/HttpUrlListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Widget/RootPageDependentSelectListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cache/ContaoCacheWarmer.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Crawl/Escargot/Subscriber/BrokenLinkCheckerSubscriber.php'), (\dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/EscargotAwareTrait.php'), (\dirname(__DIR__, 4).'/vendor/psr/log/src/LoggerAwareTrait.php'), (\dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/SubscriberLoggerTrait.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Crawl/Escargot/Subscriber/SearchIndexSubscriber.php'), (\dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/EscargotAwareTrait.php'), (\dirname(__DIR__, 4).'/vendor/psr/log/src/LoggerAwareTrait.php'), (\dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/SubscriberLoggerTrait.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Image/ImageSizes.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Intl/Countries.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Intl/Locales.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Mailer/AvailableTransports.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/PagePickerProvider.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/FilePickerProvider.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareTrait.php'), (\dirname(__DIR__, 4).'/vendor/contao/news-bundle/src/Picker/NewsPickerProvider.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareTrait.php'), (\dirname(__DIR__, 4).'/vendor/contao/calendar-bundle/src/Picker/EventPickerProvider.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareTrait.php'), (\dirname(__DIR__, 4).'/vendor/contao/faq-bundle/src/Picker/FaqPickerProvider.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Framework/FrameworkAwareTrait.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/ArticlePickerProvider.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Picker/TablePickerProvider.php'), (\dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Slug/ValidCharacters.php'), (\dirname(__DIR__, 4).'/vendor/contao/manager-bundle/src/Command/MaintenanceModeCommand.php'), (\dirname(__DIR__, 4).'/vendor/contao/manager-bundle/src/EventListener/BackendMenuListener.php'), (\dirname(__DIR__, 4).'/vendor/contao/news-bundle/src/EventListener/DataContainer/LayoutFeedOptionsListener.php')], []);

        $instance->setName('translation:extract');
        $instance->setDescription('Extract missing translations keys from code to translation files');

        return $instance;
    }
}
