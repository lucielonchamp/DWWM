<?php

namespace App\Controller\Admin;

use App\Entity\Home;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class HomeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Home::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield FormField::addTab('Bloc 1 de la HomePage')
            ->setIcon('1')->addCssClass('optional')
            ->setHelp('Administration du bloc 1 de la HomePage');
        yield TextField::new('block1_title_seo')->setColumns('col-sm-6');
        yield TextField::new('block1_title')->setColumns('col-sm-6');
        yield TextEditorField::new('block1_text')->setColumns('col-sm-6');
        yield TextField::new('block1_btn')->setColumns('col-sm-6');
        yield TextField::new('block1_btn_link')->setColumns('col-sm-6');
        yield ImageField::new('block1_img')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false)
            ->setColumns('col-sm-6');

        yield FormField::addTab('Bloc 2 de la HomePage')
            ->setIcon('2')->addCssClass('optional')
            ->setHelp('Administration du bloc 2 de la HomePage');
        yield TextField::new('block2_title_seo')->setColumns('col-sm-6');
        yield TextField::new('block2_title')->setColumns('col-sm-6');
        yield TextEditorField::new('block2_text')->setColumns('col-sm-6');

        yield FormField::addTab('Bloc 3 de la HomePage')
            ->setIcon('3')->addCssClass('optional')
            ->setHelp('Administration du bloc 3 de la HomePage');
        yield TextField::new('block3_title_seo')->setColumns('col-sm-6');
        yield TextField::new('block3_title')->setColumns('col-sm-6');
        yield TextEditorField::new('block3_text')->setColumns('col-sm-6');
        yield ImageField::new('block3_img')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false)
            ->setColumns('col-sm-6');
        
        yield FormField::addTab('Bloc 5 de la HomePage')
            ->setIcon('5')->addCssClass('optional')
            ->setHelp('Administration du bloc 5 de la HomePage');
        yield TextField::new('block5_title_seo')->setColumns('col-sm-6');
        yield TextField::new('block5_title')->setColumns('col-sm-6');
        yield TextEditorField::new('block3_text')->setColumns('col-sm-6');
        yield TextField::new('block5_btn')->setColumns('col-sm-6');
        yield TextField::new('block5_btn_link')->setColumns('col-sm-6');
    }
    
}
