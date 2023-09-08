<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Product::class, orphanRemoval: true)]
    private Collection $products;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descriptionRecipe = null;

    #[ORM\Column(length: 255)]
    private ?string $titleRecipe = null;

    #[ORM\Column(length: 255)]
    private ?string $img = null;

    #[ORM\Column(length: 50)]
    private ?string $color = null;

    #[ORM\Column(length: 255)]
    private ?string $titleSeoCategory = null;

    #[ORM\Column(length: 255)]
    private ?string $titleCategory = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contentCategory = null;

    #[ORM\Column(length: 255)]
    private ?string $imgCategory = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setCategory($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getCategory() === $this) {
                $product->setCategory(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function __toString()
    {
        return $this->title;
    }
    
    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescriptionRecipe(): ?string
    {
        return $this->descriptionRecipe;
    }

    public function setDescriptionRecipe(string $descriptionRecipe): self
    {
        $this->descriptionRecipe = $descriptionRecipe;

        return $this;
    }

    public function getTitleRecipe(): ?string
    {
        return $this->titleRecipe;
    }

    public function setTitleRecipe(string $titleRecipe): self
    {
        $this->titleRecipe = $titleRecipe;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getTitleSeoCategory(): ?string
    {
        return $this->titleSeoCategory;
    }

    public function setTitleSeoCategory(string $titleSeoCategory): self
    {
        $this->titleSeoCategory = $titleSeoCategory;

        return $this;
    }

    public function getTitleCategory(): ?string
    {
        return $this->titleCategory;
    }

    public function setTitleCategory(string $titleCategory): self
    {
        $this->titleCategory = $titleCategory;

        return $this;
    }

    public function getContentCategory(): ?string
    {
        return $this->contentCategory;
    }

    public function setContentCategory(string $contentCategory): self
    {
        $this->contentCategory = $contentCategory;

        return $this;
    }

    public function getImgCategory(): ?string
    {
        return $this->imgCategory;
    }

    public function setImgCategory(string $imgCategory): self
    {
        $this->imgCategory = $imgCategory;

        return $this;
    }
}
