<?php

namespace ContainerMVIXmUm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCitizenCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\CitizenCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CitizenCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\CitizenCrudController'] = $instance = new \App\Controller\Admin\CitizenCrudController();

        $instance->setContainer(($container->privates['.service_locator.laElj3_'] ?? $container->load('get_ServiceLocator_LaElj3Service'))->withContext('App\\Controller\\Admin\\CitizenCrudController', $container));

        return $instance;
    }
}
