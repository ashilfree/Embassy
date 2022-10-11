<?php

namespace ContainerU00CKmh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookingRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\BookingRepository' shared autowired service.
     *
     * @return \App\Repository\BookingRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\BookingRepository'] = new \App\Repository\BookingRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}