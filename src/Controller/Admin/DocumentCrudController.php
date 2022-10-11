<?php

namespace App\Controller\Admin;

use App\Entity\Document;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Vich\UploaderBundle\Form\Type\VichFileType;

class DocumentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Document::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Document')
            ->setEntityLabelInPlural('Document')
            ->showEntityActionsAsDropdown()
            ->setSearchFields(['id', 'brochure', 'name_ar', 'name_en', 'size']);
    }

    public function configureFields(string $pageName): iterable
    {
        $nameAr = TextField::new('name_ar');
        $nameEn = TextField::new('name_en', 'document name');
        $brochureFile = Field::new('brochureFile')->setFormType(FileType::class)->setTemplatePath('/uploads/documents');
        $id = IntegerField::new('id', 'ID');
        $brochure = TextField::new('brochure')->setTemplatePath('admin/brochure.html.twig')->setCustomOption('base_path', '/uploads/documents');
        $size = NumberField::new('size');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$id, $nameAr, $nameEn, $brochure];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $brochure, $nameAr, $nameEn, $size];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [$nameAr, $nameEn, $brochureFile];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [$nameAr, $nameEn, $brochureFile];
        }
    }
}
