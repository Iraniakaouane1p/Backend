<?php

namespace ContainerKw9ESIQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductControllerdeleteProductService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RIRrHzM.App\Controller\ProductController::deleteProduct()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RIRrHzM.App\\Controller\\ProductController::deleteProduct()'] = ($container->privates['.service_locator.RIRrHzM'] ?? $container->load('get_ServiceLocator_RIRrHzMService'))->withContext('App\\Controller\\ProductController::deleteProduct()', $container);
    }
}
