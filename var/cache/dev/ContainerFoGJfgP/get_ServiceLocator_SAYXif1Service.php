<?php

namespace ContainerFoGJfgP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SAYXif1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SAYXif1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SAYXif1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coachRepository' => ['privates', 'App\\Repository\\CoachRepository', 'getCoachRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'coachRepository' => 'App\\Repository\\CoachRepository',
            'paginator' => '?',
        ]);
    }
}
