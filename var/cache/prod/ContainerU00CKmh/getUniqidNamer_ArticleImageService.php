<?php

namespace ContainerU00CKmh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUniqidNamer_ArticleImageService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer.article_image' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Vich\\UploaderBundle\\Naming\\UniqidNamer.article_image'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }
}
