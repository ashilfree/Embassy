<?php

namespace ContainerU00CKmh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVisaRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\VisaRepository' shared autowired service.
     *
     * @return \App\Repository\VisaRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\VisaRepository'] = new \App\Repository\VisaRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
