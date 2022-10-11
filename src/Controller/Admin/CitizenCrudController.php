<?php

namespace App\Controller\Admin;

use App\Entity\Citizen;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CitizenCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Citizen::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Citizen')
            ->setEntityLabelInPlural('Citizen')
            ->setSearchFields(['id', 'username', 'fullName', 'email', 'phone', 'confirmationToken', 'roles'])
            ->setEntityPermission('ROLE_USER');
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('enabled');
    }

    public function configureFields(string $pageName): iterable
    {
        $username = TextField::new('username');
        $password = TextField::new('password');
        $fullName = TextField::new('fullName');
        $email = TextField::new('email');
        $phone = TextField::new('phone');
        $enabled = Field::new('enabled');
        $confirmationToken = TextField::new('confirmationToken');
        $id = IntegerField::new('id', 'ID');
        $roles = TextField::new('roles');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$id, $username, $roles, $enabled];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $username, $password, $fullName, $email, $phone, $enabled, $confirmationToken, $roles];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [$username, $password, $fullName, $email, $phone, $enabled, $confirmationToken];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [$username, $password, $fullName, $email, $phone, $enabled, $confirmationToken];
        }
    }
}
