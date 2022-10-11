<?php

namespace App\Controller\Admin;

use App\Entity\Slider;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class SliderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Slider::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Slider')
            ->setEntityLabelInPlural('Slider')
            ->showEntityActionsAsDropdown()
            ->setSearchFields(['id', 'caption', 'fileName']);
    }

    public function configureFields(string $pageName): iterable
    {
        $caption = TextField::new('caption')->setCssClass('col-md-12');
        $captionEn = TextField::new('captionEn')->setCssClass('col-md-12');
        $captionFr = TextField::new('captionFr')->setCssClass('col-md-12');
        $imageFile = ImageField::new('imageFile')->setFormType(VichImageType::class)->setCssClass('col-md-12 text-center');
        $id = IntegerField::new('id', 'ID');
        $fileName = ImageField::new('fileName')->setCustomOption('basePath', '/media/images');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$id, $caption, $captionEn, $captionFr, $fileName];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $caption,$captionEn, $captionFr, $fileName];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [$caption,$captionEn, $captionFr, $imageFile];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [$caption,$captionEn, $captionFr, $imageFile];
        }

    }
}
