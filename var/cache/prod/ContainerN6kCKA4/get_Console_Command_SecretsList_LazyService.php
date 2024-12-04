<?php

namespace ContainerN6kCKA4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_SecretsList_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.console.command.secrets_list.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.console.command.secrets_list.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('secrets:list', [], 'List all secrets', false, #[\Closure(name: 'console.command.secrets_list', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand => ($container->privates['console.command.secrets_list'] ?? $container->load('getConsole_Command_SecretsListService')));
    }
}
