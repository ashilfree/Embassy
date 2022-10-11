<?php

namespace ContainerMVIXmUm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerEnService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\HomeControllerEn' shared autowired service.
     *
     * @return \App\Controller\HomeControllerEn
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\HomeControllerEn'] = $instance = new \App\Controller\HomeControllerEn(($container->privates['App\\Repository\\ArticleRepository'] ?? $container->load('getArticleRepositoryService')), ($container->services['knp_paginator'] ?? $container->load('getKnpPaginatorService')), ($container->privates['App\\Repository\\SliderRepository'] ?? $container->load('getSliderRepositoryService')), ($container->privates['App\\Repository\\PopupRepository'] ?? $container->load('getPopupRepositoryService')), ($container->privates['App\\Repository\\AmbassadorRepository'] ?? $container->load('getAmbassadorRepositoryService')), ($container->privates['App\\Repository\\SectionRepository'] ?? $container->load('getSectionRepositoryService')), ($container->privates['App\\Repository\\RelationRepository'] ?? $container->load('getRelationRepositoryService')), ($container->privates['App\\Repository\\AffaireRepository'] ?? $container->load('getAffaireRepositoryService')), ($container->privates['App\\Repository\\VisaRepository'] ?? $container->load('getVisaRepositoryService')), ($container->privates['App\\Repository\\SchedulerRepository'] ?? $container->load('getSchedulerRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\HomeControllerEn', $container));

        return $instance;
    }
}
