<?php

namespace ContainerViZCQiq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KdKsWx5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kdKsWx5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kdKsWx5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'passwordHasher' => '?',
            'translator' => '?',
        ]);
    }
}
