<?php

namespace ContainerU00CKmh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAffaireRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AffaireRepository' shared autowired service.
     *
     * @return \App\Repository\AffaireRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AffaireRepository'] = new \App\Repository\AffaireRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}