<?php

namespace ContainerMVIXmUm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPopupTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\PopupType' shared autowired service.
     *
     * @return \App\Form\PopupType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\PopupType'] = new \App\Form\PopupType();
    }
}