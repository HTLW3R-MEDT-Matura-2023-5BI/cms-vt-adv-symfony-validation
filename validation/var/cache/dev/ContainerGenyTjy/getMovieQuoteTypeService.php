<?php

namespace ContainerGenyTjy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMovieQuoteTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\MovieQuoteType' shared autowired service.
     *
     * @return \App\Form\MovieQuoteType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/MovieQuoteType.php';

        return $container->privates['App\\Form\\MovieQuoteType'] = new \App\Form\MovieQuoteType();
    }
}
