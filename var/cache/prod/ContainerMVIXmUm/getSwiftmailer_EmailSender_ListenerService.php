<?php

namespace ContainerMVIXmUm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_EmailSender_ListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($container, ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
