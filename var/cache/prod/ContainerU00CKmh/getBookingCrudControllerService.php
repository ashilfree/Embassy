<?php

namespace ContainerU00CKmh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookingCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\BookingCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\BookingCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\BookingCrudController'] = $instance = new \App\Controller\Admin\BookingCrudController();

        $instance->setContainer(($container->privates['.service_locator.laElj3_'] ?? $container->load('get_ServiceLocator_LaElj3Service'))->withContext('App\\Controller\\Admin\\BookingCrudController', $container));

        return $instance;
    }
}
