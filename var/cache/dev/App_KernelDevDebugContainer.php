<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSFHHxzO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSFHHxzO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSFHHxzO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSFHHxzO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSFHHxzO\App_KernelDevDebugContainer([
    'container.build_hash' => 'SFHHxzO',
    'container.build_id' => '7a86c986',
    'container.build_time' => 1633527581,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSFHHxzO');
