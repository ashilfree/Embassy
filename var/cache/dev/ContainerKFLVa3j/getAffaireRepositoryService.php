<?php

namespace ContainerKFLVa3j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAffaireRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\AffaireRepository' shared autowired service.
     *
     * @return \App\Repository\AffaireRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/AffaireRepository.php';

        return $container->privates['App\\Repository\\AffaireRepository'] = new \App\Repository\AffaireRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
