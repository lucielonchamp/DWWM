<?php
namespace App\Controller\Admin;

use App\Entity\Menu;
use Doctrine\ORM\QueryBuilder;
use App\Repository\MenuRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use Symfony\Component\HttpFoundation\RequestStack;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MenuCrudController extends AbstractCrudController
{

    const MENU_PAGES = 0;
    const MENU_ARTICLES = 1;
    const MENU_LINKS = 2;
    const MENU_CATEGORIES = 3;

    private RequestStack $requestStack;
    private MenuRepository $menuRepository;

    public function __construct(RequestStack $requestStack, MenuRepository $menuRepository)
    {
        $this->requestStack = $requestStack;
        $this->menuRepository = $menuRepository;
    }

    public static function getEntityFqcn(): string
    {
        return Menu::class;
    }

    public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
    {
        $subMenuIndex = $this->getSubMenuIndex();
        return $this->menuRepository->findByField($this->getFieldNameFromSubMenuIndex($subMenuIndex));
    }

    public function configureCrud(Crud $crud): Crud
    {
        $subMenuIndex = $this->getSubMenuIndex();
        $entityLabelInSingular = 'un menu';

        $entityLabelInPlurial = match($subMenuIndex){
            self::MENU_ARTICLES => 'Articles',
            self::MENU_CATEGORIES => 'Categories',
            self::MENU_LINKS => 'Liens personnalisés',
            default => 'Pages',
        };

        return $crud
        ->setEntityLabelInSingular($entityLabelInSingular)
        ->setEntityLabelInPlural($entityLabelInPlurial);
    }

    public function configureFields(string $pageName): iterable
    {   
        $subMenuIndex = $this->getSubMenuIndex();
        yield TextField::new('name', 'Titre de la navigation');
        yield NumberField::new('menuOrder', 'Order');
        yield $this->getFieldFromSubMenuIndex($subMenuIndex)->setRequired(true);
        yield BooleanField::new('isVisible', 'Visible');
        yield AssociationField::new('subMenus', 'Sous-éléments'); 
    }

    private function getFieldNameFromSubMenuIndex(int $subMenuIndex): string
    {
        return match ($subMenuIndex) {
            self::MENU_ARTICLES => 'article',
            self::MENU_CATEGORIES => 'category',
            self::MENU_LINKS => 'link',
            default => 'page',
        };
    }

    private function getFieldFromSubMenuIndex(int $subMenuIndex): AssociationField|TextField
    {
        $fieldName = $this->getFieldNameFromSubMenuIndex($subMenuIndex);

        // if ($fieldName == 'link') {
        //     return TextField::new($fieldName, 'liens');
        // } else {
        //     return AssociationField::new($fieldName);
        // }
        return ($fieldName === 'link') ? TextField::new($fieldName, 'Liens') : AssociationField::new($fieldName);
    }

    private function getSubMenuIndex(): int
    {
        $url = $this->requestStack->getMainRequest()->query->all();
        foreach ($url as $key => $value) {
            if( 'referrer' === $key){
                $val = strstr($value, 'submenuIndex');
                $val = substr($val,13);
                return $val;
            }
        }
        return $this->requestStack->getMainRequest()->query->getInt('submenuIndex');
    }
}