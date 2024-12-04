<?php

namespace ContainerN6kCKA4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_NotExposedService extends App_KernelProdContainer
{
    /*
     * Gets the public 'api_platform.action.not_exposed' shared service.
     *
     * @return \ApiPlatform\Symfony\Action\NotExposedAction
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['api_platform.action.not_exposed'] = new \ApiPlatform\Symfony\Action\NotExposedAction();
    }
}
