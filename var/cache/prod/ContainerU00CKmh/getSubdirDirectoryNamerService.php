<?php

namespace ContainerU00CKmh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubdirDirectoryNamerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Vich\UploaderBundle\Naming\SubdirDirectoryNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\SubdirDirectoryNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer'] = new \Vich\UploaderBundle\Naming\SubdirDirectoryNamer();
    }
}
