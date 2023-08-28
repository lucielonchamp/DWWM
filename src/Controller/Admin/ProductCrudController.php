<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('Titre du produit'),
            SlugField::new('slug')
            ->setTargetFieldName('name'),
            ImageField::new('illustration')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false),
            ImageField::new('illustration2')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false),
            ImageField::new('imgMiniature')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false),
            TextEditorField::new('description')->setLabel('Description de la dégustation'),
            BooleanField::new('isBest', 'Produits phares'),
            MoneyField::new('price')
            ->setCurrency('EUR'),
            AssociationField::new('category'),
            TextField::new('titleSeo')->setColumns('col-sm-6'),
            TextEditorField::new('descriptionSeo')->setColumns('col-sm-6'),
            TextField::new('alcohol')->setColumns('col-sm-6'),
            TextEditorField::new('aroma')->setColumns('col-sm-6'),
            TextEditorField::new('aroma1')->setColumns('col-sm-6'),
            TextEditorField::new('aroma2')->setColumns('col-sm-6'),
            TextEditorField::new('aroma3')->setColumns('col-sm-6'),
            TextField::new('ingredient')->setColumns('col-sm-6'),
            IntegerField::new('bitterness')->setColumns('col-sm-6'),
            IntegerField::new('roundness')->setColumns('col-sm-6'),
            IntegerField::new('acidity')->setColumns('col-sm-6'),
        ];
    }
}
