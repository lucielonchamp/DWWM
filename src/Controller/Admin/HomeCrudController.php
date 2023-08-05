<?php

namespace App\Controller\Admin;

use App\Entity\Home;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HomeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Home::class;
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->remove(Crud::PAGE_INDEX, Action::NEW)
            ->remove(Crud::PAGE_INDEX, Action::DELETE)
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield FormField::addTab('Bloc 1 de la HomePage')
            ->setIcon('1')->addCssClass('optional')
            ->setHelp('Administration du bloc 1 de la HomePage');
        yield TextField::new('block1TitleSeo')->setColumns('col-sm-6');
        yield TextField::new('block1Title')->setColumns('col-sm-6');
        yield TextEditorField::new('block1Text')->setColumns('col-sm-6');
        yield TextField::new('block1Btn')->setColumns('col-sm-6');
        yield TextField::new('block1BtnLink')->setColumns('col-sm-6');
        yield ImageField::new('block1Img')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false)
            ->setColumns('col-sm-6');

        yield FormField::addTab('Bloc 2 de la HomePage')
            ->setIcon('2')->addCssClass('optional')
            ->setHelp('Administration du bloc 2 de la HomePage');
        yield TextField::new('block2TitleSeo')->setColumns('col-sm-6');
        yield TextField::new('block2Title')->setColumns('col-sm-6');
        yield TextEditorField::new('block2Text')->setColumns('col-sm-6');

        yield FormField::addTab('Bloc 3 de la HomePage')
            ->setIcon('3')->addCssClass('optional')
            ->setHelp('Administration du bloc 3 de la HomePage');
        yield TextField::new('block3TitleSeo')->setColumns('col-sm-6');
        yield TextField::new('block3Title')->setColumns('col-sm-6');
        yield TextEditorField::new('block3Text')->setColumns('col-sm-6');
        yield ImageField::new('block3Img')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false)
            ->setColumns('col-sm-6');
        
        yield FormField::addTab('Bloc 5 de la HomePage')
            ->setIcon('5')->addCssClass('optional')
            ->setHelp('Administration du bloc 5 de la HomePage');
        yield TextField::new('block5TitleSeo')->setColumns('col-sm-6');
        yield TextField::new('block5Title')->setColumns('col-sm-6');
        yield TextEditorField::new('block5Text')->setColumns('col-sm-6');
        yield TextField::new('block5Btn')->setColumns('col-sm-6');
        yield TextField::new('block5BtnLink')->setColumns('col-sm-6');
        yield ImageField::new('block5Img')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false)
            ->setColumns('col-sm-6');
    }
    
}
