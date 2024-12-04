<?php

namespace ContainerN6kCKA4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends App_KernelProdContainer
{
    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (isset($container->privates['cache.validator'])) {
                yield 'cache.validator' => ($container->privates['cache.validator'] ?? null);
            }
            if (isset($container->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($container->privates['cache.serializer'] ?? null);
            }
            if (isset($container->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($container->privates['cache.property_info'] ?? null);
            }
            if (isset($container->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($container->privates['debug.stopwatch'] ?? null);
            }
            if (isset($container->privates['doctrine.result_cache_pool'])) {
                yield 'doctrine.result_cache_pool' => ($container->privates['doctrine.result_cache_pool'] ?? null);
            }
            if (isset($container->privates['doctrine.system_cache_pool'])) {
                yield 'doctrine.system_cache_pool' => ($container->privates['doctrine.system_cache_pool'] ?? null);
            }
            if (isset($container->privates['session_listener'])) {
                yield 'session_listener' => ($container->privates['session_listener'] ?? null);
            }
            if (isset($container->services['cache.validator_expression_language'])) {
                yield 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? null);
            }
            if (isset($container->privates['twig'])) {
                yield 'twig' => ($container->privates['twig'] ?? null);
            }
            if (isset($container->privates['security.token_storage'])) {
                yield 'security.token_storage' => ($container->privates['security.token_storage'] ?? null);
            }
            if (isset($container->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($container->services['cache.security_is_granted_attribute_expression_language'])) {
                yield 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? null);
            }
            if (isset($container->services['cache.security_is_csrf_token_valid_attribute_expression_language'])) {
                yield 'cache.security_is_csrf_token_valid_attribute_expression_language' => ($container->services['cache.security_is_csrf_token_valid_attribute_expression_language'] ?? null);
            }
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
            if (false) {
                yield 'doctrine.debug_data_holder' => null;
            }
            if (false) {
                yield 'api_platform.cache.route_name_resolver' => null;
            }
            if (isset($container->privates['api_platform.cache.metadata.resource'])) {
                yield 'api_platform.cache.metadata.resource' => ($container->privates['api_platform.cache.metadata.resource'] ?? null);
            }
            if (isset($container->privates['api_platform.cache.metadata.property'])) {
                yield 'api_platform.cache.metadata.property' => ($container->privates['api_platform.cache.metadata.property'] ?? null);
            }
            if (isset($container->privates['api_platform.cache.metadata.resource_collection'])) {
                yield 'api_platform.cache.metadata.resource_collection' => ($container->privates['api_platform.cache.metadata.resource_collection'] ?? null);
            }
            if (false) {
                yield 'api_platform.cache.openapi' => null;
            }
        }, fn () => 0 + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (isset($container->privates['cache.validator'])) + (int) (isset($container->privates['cache.serializer'])) + (int) (isset($container->privates['cache.property_info'])) + (int) (isset($container->privates['debug.stopwatch'])) + (int) (isset($container->privates['doctrine.result_cache_pool'])) + (int) (isset($container->privates['doctrine.system_cache_pool'])) + (int) (isset($container->privates['session_listener'])) + (int) (isset($container->services['cache.validator_expression_language'])) + (int) (isset($container->privates['twig'])) + (int) (isset($container->privates['security.token_storage'])) + (int) (isset($container->privates['cache.security_expression_language'])) + (int) (isset($container->services['cache.security_is_granted_attribute_expression_language'])) + (int) (isset($container->services['cache.security_is_csrf_token_valid_attribute_expression_language'])) + (int) (isset($container->services['doctrine'])) + (int) (false) + (int) (false) + (int) (isset($container->privates['api_platform.cache.metadata.resource'])) + (int) (isset($container->privates['api_platform.cache.metadata.property'])) + (int) (isset($container->privates['api_platform.cache.metadata.resource_collection'])) + (int) (false)), ['cache.app' => ['reset'], 'cache.system' => ['reset'], 'cache.validator' => ['reset'], 'cache.serializer' => ['reset'], 'cache.property_info' => ['reset'], 'debug.stopwatch' => ['reset'], 'doctrine.result_cache_pool' => ['reset'], 'doctrine.system_cache_pool' => ['reset'], 'session_listener' => ['reset'], 'cache.validator_expression_language' => ['reset'], 'twig' => ['resetGlobals'], 'security.token_storage' => ['disableUsageTracking', 'setToken'], 'cache.security_expression_language' => ['reset'], 'cache.security_is_granted_attribute_expression_language' => ['reset'], 'cache.security_is_csrf_token_valid_attribute_expression_language' => ['reset'], 'doctrine' => ['reset'], 'doctrine.debug_data_holder' => ['reset'], 'api_platform.cache.route_name_resolver' => ['reset'], 'api_platform.cache.metadata.resource' => ['reset'], 'api_platform.cache.metadata.property' => ['reset'], 'api_platform.cache.metadata.resource_collection' => ['reset'], 'api_platform.cache.openapi' => ['reset']]);
    }
}
