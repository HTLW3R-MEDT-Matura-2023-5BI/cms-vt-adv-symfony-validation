<?php

namespace ContainerKMRakzH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UsgAKdMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.usgAKdM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.usgAKdM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actor' => ['privates', '.errored..service_locator.usgAKdM.App\\Entity\\Actor', NULL, 'Cannot autowire service ".service_locator.usgAKdM": it references class "App\\Entity\\Actor" but no such service exists.'],
            'actorRepository' => ['privates', 'App\\Repository\\ActorRepository', 'getActorRepositoryService', true],
        ], [
            'actor' => 'App\\Entity\\Actor',
            'actorRepository' => 'App\\Repository\\ActorRepository',
        ]);
    }
}