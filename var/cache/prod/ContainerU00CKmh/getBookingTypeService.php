<?php

namespace ContainerU00CKmh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookingTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\BookingType' shared autowired service.
     *
     * @return \App\Form\BookingType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\BookingType'] = new \App\Form\BookingType();
    }
}
