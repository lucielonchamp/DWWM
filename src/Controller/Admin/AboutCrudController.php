<?php

namespace App\Controller\Admin;

use App\Entity\About;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AboutCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return About::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield FormField::addTab('Contact information Tab')
            ->setIcon('phone')->addCssClass('optional')
            ->setHelp('Phone number is preferred');
        yield TextField::new('block1_title_seo');

        yield FormField::addTab('Contact information Tab2')
            ->setIcon('phone')->addCssClass('optional')
            ->setHelp('Phone number is preferred');
        yield TextField::new('block2_title_seo');

        yield FormField::addTab('Contact information Tab3')
            ->setIcon('phone')->addCssClass('optional')
            ->setHelp('Phone number is preferred');
        yield TextField::new('block3_title_seo');
    }
}
