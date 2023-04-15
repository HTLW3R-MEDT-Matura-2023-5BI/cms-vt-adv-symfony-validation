<?php

namespace ContainerKMRakzH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActorTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ActorType' shared autowired service.
     *
     * @return \App\Form\ActorType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ActorType.php';

        return $container->privates['App\\Form\\ActorType'] = new \App\Form\ActorType();
    }
}
