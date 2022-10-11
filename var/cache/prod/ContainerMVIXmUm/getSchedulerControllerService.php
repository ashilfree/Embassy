<?php

namespace ContainerMVIXmUm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchedulerControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\SchedulerController' shared autowired service.
     *
     * @return \App\Controller\SchedulerController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\SchedulerController'] = $instance = new \App\Controller\SchedulerController(($container->services['swiftmailer.mailer.default'] ?? $container->load('getSwiftmailer_Mailer_DefaultService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\SchedulerController', $container));

        return $instance;
    }
}
