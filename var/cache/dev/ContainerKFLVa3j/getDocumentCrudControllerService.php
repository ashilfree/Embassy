<?php

namespace ContainerKFLVa3j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDocumentCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\DocumentCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\DocumentCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/DocumentCrudController.php';

        $container->services['App\\Controller\\Admin\\DocumentCrudController'] = $instance = new \App\Controller\Admin\DocumentCrudController();

        $instance->setContainer(($container->privates['.service_locator.laElj3_'] ?? $container->load('get_ServiceLocator_LaElj3Service'))->withContext('App\\Controller\\Admin\\DocumentCrudController', $container));

        return $instance;
    }
}
