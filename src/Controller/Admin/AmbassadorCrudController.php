<?php

namespace App\Controller\Admin;

use App\Entity\Ambassador;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class AmbassadorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ambassador::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        $title = TextField::new('title')->setCssClass('p-2')->setLabel('عنوان');
        $titleEn = TextField::new('titleEn')->setCssClass('p-2')->setLabel('Title (English)');
        $titleFr = TextField::new('titleFr')->setCssClass('p-2')->setLabel('Titre (Français)');
        $id = IntegerField::new('id', 'ID');
        $content = TextEditorField::new('content')->onlyOnForms()->setFormType(CKEditorType::class)->setCssClass('p-2 text-right')->setLabel('المحتوى');
        $contentEn = TextEditorField::new('contentEn')->onlyOnForms()->setFormType(CKEditorType::class)->setCssClass('p-2')->setLabel('Content (English)');
        $contentFr = TextEditorField::new('contentFr')->onlyOnForms()->setFormType(CKEditorType::class)->setCssClass('p-2')->setLabel('Contenu (Français)');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$id, $title, $titleEn, $titleFr];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [ $title, $titleEn, $titleFr, $content, $contentEn, $contentFr];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [ $title, $titleEn, $titleFr, $content, $contentEn, $contentFr];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [ $title, $titleEn, $titleFr, $content, $contentEn, $contentFr];
        }
    }

}
