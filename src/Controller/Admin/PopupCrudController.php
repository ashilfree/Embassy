<?php

namespace App\Controller\Admin;

use App\Entity\Popup;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\Routing\Annotation\Route;

class PopupCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Popup::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
