<?php

namespace ContainerN6kCKA4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}
