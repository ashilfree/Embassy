<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('User')
            ->setEntityLabelInPlural('User')
            ->showEntityActionsAsDropdown()
            ->setSearchFields(['id', 'username', 'roles'])
            ->setEntityPermission('ROLE_ADMIN');
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
        $enabled = Field::new('enabled');
        $id = IntegerField::new('id', 'ID');
        $roles = TextField::new('roles');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$id, $username, $roles, $enabled];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $username, $password, $roles, $enabled];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [$username, $password, $enabled];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [$username, $password, $enabled];
        }
    }
}
