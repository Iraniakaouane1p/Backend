<?php

namespace ContainerN6kCKA4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryControllerdeleteCategoryService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.2S0AJ0M.App\Controller\CategoryController::deleteCategory()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2S0AJ0M.App\\Controller\\CategoryController::deleteCategory()'] = ($container->privates['.service_locator.2S0AJ0M'] ?? $container->load('get_ServiceLocator_2S0AJ0MService'))->withContext('App\\Controller\\CategoryController::deleteCategory()', $container);
    }
}