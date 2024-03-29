<?php

namespace App\Twig;

use App\Controller\Admin\ArticleCrudController;
use App\Controller\Admin\CategoryCrudController;
use App\Controller\Admin\PageCrudController;
use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Page;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Doctrine\Common\Collections\Collection;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Security;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    const ADMIN_NAMESPACE = 'App\Controller\Admin';

    public function __construct(
        private RouterInterface $router,
        private AdminUrlGenerator $adminUrlGenerator,
        private CategoryRepository $categoryRepository,
        private Security $security,
        private ProductRepository $productRepository,
    ) {

    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('ea_admin_url', [$this, 'getAdminUrl']),
            new TwigFunction('ea_edit', [$this, 'getAdminEditUrl']),
            new TwigFunction('entity_label', [$this, 'getEditCurrentEntityLabel']),
            new TwigFunction('menu_categories', [$this, 'getCategories']),
            new TwigFunction('menu_products', [$this, 'getProducts']),
            new TwigFunction('menu_productsIsBest', [$this, 'getProductsIsBest']),
        ];
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('categoriesToString', [$this, 'categoriesToString']),
            new TwigFilter('isCommentAuthor', [$this, 'isCommentAuthor']),
        ];
    }

    public function categoriesToString(Collection $categories): string
    {
        $generateCategoryLink = function(Category $category) {
            $url = $this->router->generate('categories', [
                'slug' => $category->getSlug()
            ]);
            return "<a href='$url'>{$category->getName()}</a>";
        };

        $categoryLinks = array_map($generateCategoryLink, $categories->toArray());

        return implode(', ', $categoryLinks);
    }

    public function getEditCurrentEntityLabel(object $entity): string
    {
        return match($entity::class) {
            Article::class => "Modifier l'article",
            Category::class => 'Modifier la catégorie',
            Page::class => 'Modifier la page'
        };
    }

    public function getAdminUrl(string $controller, string $action = Action::INDEX): string
    {
        return $this->adminUrlGenerator
            ->setController(self::ADMIN_NAMESPACE . '\\' . $controller)
            ->setAction($action)
            ->generateUrl();
    }

    public function getAdminEditUrl(object $entity): ?string
    {
        $crudController = match ($entity::class) {
            Article::class => ArticleCrudController::class,
            Category::class => CategoryCrudController::class,
            Page::class => PageCrudController::class
        };

        return $this->adminUrlGenerator
            ->setController($crudController)
            ->setAction(Action::EDIT)
            ->setEntityId($entity->getId())
            ->generateUrl();
    }

    public function getCategories()
    {
        return $this->categoryRepository->findAll();
    }

    public function getProducts()
    {
        return $this->productRepository->findAll();
    }

    public function getProductsIsBest()
    {
        return $this->productRepository->findByIsBest(1);
    }

}