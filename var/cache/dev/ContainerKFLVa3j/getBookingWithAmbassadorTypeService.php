<?php

namespace ContainerKFLVa3j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookingWithAmbassadorTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\BookingWithAmbassadorType' shared autowired service.
     *
     * @return \App\Form\BookingWithAmbassadorType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/BookingWithAmbassadorType.php';

        return $container->privates['App\\Form\\BookingWithAmbassadorType'] = new \App\Form\BookingWithAmbassadorType();
    }
}
