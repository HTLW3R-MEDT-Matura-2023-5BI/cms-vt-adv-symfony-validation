<?php

namespace ContainerGenyTjy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YE7crC3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yE7crC3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yE7crC3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ActorController::delete' => ['privates', '.service_locator.usgAKdM', 'get_ServiceLocator_UsgAKdMService', true],
            'App\\Controller\\ActorController::edit' => ['privates', '.service_locator.usgAKdM', 'get_ServiceLocator_UsgAKdMService', true],
            'App\\Controller\\ActorController::index' => ['privates', '.service_locator.o5rlq0m', 'get_ServiceLocator_O5rlq0mService', true],
            'App\\Controller\\ActorController::new' => ['privates', '.service_locator.o5rlq0m', 'get_ServiceLocator_O5rlq0mService', true],
            'App\\Controller\\ActorController::show' => ['privates', '.service_locator.6lQN65V', 'get_ServiceLocator_6lQN65VService', true],
            'App\\Controller\\MovieController::delete' => ['privates', '.service_locator..Bww7jc', 'get_ServiceLocator__Bww7jcService', true],
            'App\\Controller\\MovieController::edit' => ['privates', '.service_locator..Bww7jc', 'get_ServiceLocator__Bww7jcService', true],
            'App\\Controller\\MovieController::index' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\MovieController::new' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\MovieController::show' => ['privates', '.service_locator.I4k6Jea', 'get_ServiceLocator_I4k6JeaService', true],
            'App\\Controller\\MovieQuoteController::delete' => ['privates', '.service_locator.vGkhT8q', 'get_ServiceLocator_VGkhT8qService', true],
            'App\\Controller\\MovieQuoteController::edit' => ['privates', '.service_locator.vGkhT8q', 'get_ServiceLocator_VGkhT8qService', true],
            'App\\Controller\\MovieQuoteController::index' => ['privates', '.service_locator.ENnrd35', 'get_ServiceLocator_ENnrd35Service', true],
            'App\\Controller\\MovieQuoteController::new' => ['privates', '.service_locator.ENnrd35', 'get_ServiceLocator_ENnrd35Service', true],
            'App\\Controller\\MovieQuoteController::show' => ['privates', '.service_locator.FEbFtr4', 'get_ServiceLocator_FEbFtr4Service', true],
            'App\\Controller\\OverviewController::index' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\SearchController::randomMovie' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\SearchController::search' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ActorController:delete' => ['privates', '.service_locator.usgAKdM', 'get_ServiceLocator_UsgAKdMService', true],
            'App\\Controller\\ActorController:edit' => ['privates', '.service_locator.usgAKdM', 'get_ServiceLocator_UsgAKdMService', true],
            'App\\Controller\\ActorController:index' => ['privates', '.service_locator.o5rlq0m', 'get_ServiceLocator_O5rlq0mService', true],
            'App\\Controller\\ActorController:new' => ['privates', '.service_locator.o5rlq0m', 'get_ServiceLocator_O5rlq0mService', true],
            'App\\Controller\\ActorController:show' => ['privates', '.service_locator.6lQN65V', 'get_ServiceLocator_6lQN65VService', true],
            'App\\Controller\\MovieController:delete' => ['privates', '.service_locator..Bww7jc', 'get_ServiceLocator__Bww7jcService', true],
            'App\\Controller\\MovieController:edit' => ['privates', '.service_locator..Bww7jc', 'get_ServiceLocator__Bww7jcService', true],
            'App\\Controller\\MovieController:index' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\MovieController:new' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\MovieController:show' => ['privates', '.service_locator.I4k6Jea', 'get_ServiceLocator_I4k6JeaService', true],
            'App\\Controller\\MovieQuoteController:delete' => ['privates', '.service_locator.vGkhT8q', 'get_ServiceLocator_VGkhT8qService', true],
            'App\\Controller\\MovieQuoteController:edit' => ['privates', '.service_locator.vGkhT8q', 'get_ServiceLocator_VGkhT8qService', true],
            'App\\Controller\\MovieQuoteController:index' => ['privates', '.service_locator.ENnrd35', 'get_ServiceLocator_ENnrd35Service', true],
            'App\\Controller\\MovieQuoteController:new' => ['privates', '.service_locator.ENnrd35', 'get_ServiceLocator_ENnrd35Service', true],
            'App\\Controller\\MovieQuoteController:show' => ['privates', '.service_locator.FEbFtr4', 'get_ServiceLocator_FEbFtr4Service', true],
            'App\\Controller\\OverviewController:index' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\SearchController:randomMovie' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'App\\Controller\\SearchController:search' => ['privates', '.service_locator.T8SuAfV', 'get_ServiceLocator_T8SuAfVService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ActorController::delete' => '?',
            'App\\Controller\\ActorController::edit' => '?',
            'App\\Controller\\ActorController::index' => '?',
            'App\\Controller\\ActorController::new' => '?',
            'App\\Controller\\ActorController::show' => '?',
            'App\\Controller\\MovieController::delete' => '?',
            'App\\Controller\\MovieController::edit' => '?',
            'App\\Controller\\MovieController::index' => '?',
            'App\\Controller\\MovieController::new' => '?',
            'App\\Controller\\MovieController::show' => '?',
            'App\\Controller\\MovieQuoteController::delete' => '?',
            'App\\Controller\\MovieQuoteController::edit' => '?',
            'App\\Controller\\MovieQuoteController::index' => '?',
            'App\\Controller\\MovieQuoteController::new' => '?',
            'App\\Controller\\MovieQuoteController::show' => '?',
            'App\\Controller\\OverviewController::index' => '?',
            'App\\Controller\\SearchController::randomMovie' => '?',
            'App\\Controller\\SearchController::search' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ActorController:delete' => '?',
            'App\\Controller\\ActorController:edit' => '?',
            'App\\Controller\\ActorController:index' => '?',
            'App\\Controller\\ActorController:new' => '?',
            'App\\Controller\\ActorController:show' => '?',
            'App\\Controller\\MovieController:delete' => '?',
            'App\\Controller\\MovieController:edit' => '?',
            'App\\Controller\\MovieController:index' => '?',
            'App\\Controller\\MovieController:new' => '?',
            'App\\Controller\\MovieController:show' => '?',
            'App\\Controller\\MovieQuoteController:delete' => '?',
            'App\\Controller\\MovieQuoteController:edit' => '?',
            'App\\Controller\\MovieQuoteController:index' => '?',
            'App\\Controller\\MovieQuoteController:new' => '?',
            'App\\Controller\\MovieQuoteController:show' => '?',
            'App\\Controller\\OverviewController:index' => '?',
            'App\\Controller\\SearchController:randomMovie' => '?',
            'App\\Controller\\SearchController:search' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
