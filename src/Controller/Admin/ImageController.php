<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Provider\AdminContextProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ImageController extends AbstractController{

    private $adminContextProvider;

    public function __construct(AdminContextProvider $adminContextProvider)
    {
        $this->adminContextProvider = $adminContextProvider;
    }
    /**
     * @Route("image-cropper", name="image.cropper")
     */
    public function index()
    {
        $context = $this->adminContextProvider->getContext();
        return $this->render('admin/image.cropper.html.twig', [
            'context' => $context
        ]);
    }
}