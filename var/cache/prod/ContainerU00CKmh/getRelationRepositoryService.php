<?php

namespace ContainerU00CKmh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRelationRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\RelationRepository' shared autowired service.
     *
     * @return \App\Repository\RelationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\RelationRepository'] = new \App\Repository\RelationRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
