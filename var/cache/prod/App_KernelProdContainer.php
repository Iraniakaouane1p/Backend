<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN6kCKA4\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN6kCKA4/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerN6kCKA4.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerN6kCKA4\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerN6kCKA4\App_KernelProdContainer([
    'container.build_hash' => 'N6kCKA4',
    'container.build_id' => '4f55dd3c',
    'container.build_time' => 1733158746,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN6kCKA4');
