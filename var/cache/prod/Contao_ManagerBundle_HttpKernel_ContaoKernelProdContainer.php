<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerO1tQihN\Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerO1tQihN/Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer.php') {
    touch(__DIR__.'/ContainerO1tQihN.legacy');

    return;
}

if (!\class_exists(Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer::class, false)) {
    \class_alias(\ContainerO1tQihN\Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer::class, Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer::class, false);
}

return new \ContainerO1tQihN\Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer([
    'container.build_hash' => 'O1tQihN',
    'container.build_id' => '14fa748a',
    'container.build_time' => 1713767770,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerO1tQihN');