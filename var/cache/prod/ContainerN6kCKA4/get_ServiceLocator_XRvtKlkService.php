<?php

namespace ContainerN6kCKA4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XRvtKlkService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.xRvtKlk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xRvtKlk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.main' => ['privates', 'security.event_dispatcher.main', 'getSecurity_EventDispatcher_MainService', false],
        ], [
            'event_dispatcher' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.main' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}
