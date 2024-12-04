<?php

namespace ContainerN6kCKA4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_State_ErrorProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.state.error_provider' shared service.
     *
     * @return \ApiPlatform\State\ErrorProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.state.error_provider'] = new \ApiPlatform\State\ErrorProvider(false, ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)));
    }
}
