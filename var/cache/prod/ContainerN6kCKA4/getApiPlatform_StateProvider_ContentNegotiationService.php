<?php

namespace ContainerN6kCKA4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProvider_ContentNegotiationService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.state_provider.content_negotiation' shared service.
     *
     * @return \ApiPlatform\State\Provider\ContentNegotiationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.state_provider.content_negotiation'] = new \ApiPlatform\State\Provider\ContentNegotiationProvider(new \ApiPlatform\State\Provider\ParameterProvider(($container->services['api_platform.state_provider.parameter_validator'] ?? $container->load('getApiPlatform_StateProvider_ParameterValidatorService')), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'api_platform.serializer.filter_parameter_provider' => ['privates', 'api_platform.serializer.filter_parameter_provider', 'getApiPlatform_Serializer_FilterParameterProviderService', true],
        ], [
            'api_platform.serializer.filter_parameter_provider' => 'ApiPlatform\\Serializer\\Parameter\\SerializerFilterParameterProvider',
        ])), ($container->privates['api_platform.negotiator'] ??= new \Negotiation\Negotiator()), $container->parameters['api_platform.formats'], $container->parameters['api_platform.error_formats']);
    }
}