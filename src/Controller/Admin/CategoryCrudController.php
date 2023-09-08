<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;

class CategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('title')->setColumns('col-sm-6');
        yield SlugField::new('slug')->setTargetFieldName('title')->setColumns('col-sm-6');
        yield TextEditorField::new('description')->setColumns('col-sm-6');
        yield TextEditorField::new('descriptionRecipe')->setColumns('col-sm-6');
        yield ImageField::new('img')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false);
        yield ImageField::new('imgCategory')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false);
        yield TextField::new('titleRecipe')->setColumns('col-sm-6');
        yield ColorField::new('color')->setColumns('col-sm-6');
        yield TextField::new('titleSeoCategory')->setColumns('col-sm-6');
        yield TextField::new('titleCategory')->setColumns('col-sm-6');
        yield TextEditorField::new('contentCategory')->setColumns('col-sm-6');
    }
}
