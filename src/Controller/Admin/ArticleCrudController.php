<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Article')
            ->setEntityLabelInPlural('Article')
            ->showEntityActionsAsDropdown()
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            ->setSearchFields(['id', 'title', 'description','titleEn', 'descriptionEn','titleFr', 'descriptionFr', 'fileName']);
    }



    public function configureFields(string $pageName): iterable
    {
        $title = TextField::new('title')->setTextAlign('right')->setCssClass('col-md-12')->setLabel('Title (Arabic)');
        $titleEn = TextField::new('titleEn')->setCssClass('col-md-12')->setLabel('Title (English)');
        $titleFr = TextField::new('titleFr')->setCssClass('col-md-12')->setLabel('Titre (Français)');
        $publishedAt = DateField::new('published_at')->setCssClass('col-md-6')->setCustomOptions(['class' => 'date-picker']);
        $description = TextareaField::new('description')->onlyOnForms()->setFormType(CKEditorType::class)->setCssClass('col-md-12')->setLabel('Description (Arabic)');
        $descriptionEn = TextareaField::new('descriptionEn')->onlyOnForms()->setFormType(CKEditorType::class)->setCssClass('col-md-12')->setLabel('Description (English)');
        $descriptionFr = TextareaField::new('descriptionFr')->onlyOnForms()->setFormType(CKEditorType::class)->setCssClass('col-md-12')->setLabel('Description (Français)');
        $imageFile = ImageField::new('imageFile')->setFormType(VichImageType::class)->setCssClass('col-md-12 text-center');
        $id = IntegerField::new('id', 'ID');
        $fileName = TextField::new('fileName');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$id, $title, $publishedAt];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $title, $titleEn, $titleFr, $description, $descriptionEn, $descriptionFr, $fileName, $publishedAt];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [$title, $titleEn, $titleFr, $description, $descriptionEn, $descriptionFr, $publishedAt, $imageFile];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [$title, $titleEn, $titleFr, $description, $descriptionEn, $descriptionFr, $publishedAt, $imageFile];
        }
    }
}
