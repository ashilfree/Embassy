<?php

namespace ContainerKFLVa3j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCitizenRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\CitizenRepository' shared autowired service.
     *
     * @return \App\Repository\CitizenRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/CitizenRepository.php';

        return $container->privates['App\\Repository\\CitizenRepository'] = new \App\Repository\CitizenRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
