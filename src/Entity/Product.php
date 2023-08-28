<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 255)]
    private ?string $illustration = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\ManyToOne(cascade: ['remove'], inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    #[ORM\Column]
    private ?bool $isBest = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descriptionSeo = null;

    #[ORM\Column(length: 50)]
    private ?string $alcohol = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $aroma = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $aroma1 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $aroma2 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $aroma3 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $ingredient = null;

    #[ORM\Column]
    private ?int $bitterness = null;

    #[ORM\Column]
    private ?int $roundness = null;

    #[ORM\Column]
    private ?int $acidity = null;

    #[ORM\Column(length: 255)]
    private ?string $titleSeo = null;

    #[ORM\Column(length: 255)]
    private ?string $illustration2 = null;

    #[ORM\Column(length: 255)]
    private ?string $imgMiniature = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(string $illustration): self
    {
        $this->illustration = $illustration;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function isIsBest(): ?bool
    {
        return $this->isBest;
    }

    public function setIsBest(bool $isBest): self
    {
        $this->isBest = $isBest;

        return $this;
    }

    public function getDescriptionSeo(): ?string
    {
        return $this->descriptionSeo;
    }

    public function setDescriptionSeo(?string $descriptionSeo): static
    {
        $this->descriptionSeo = $descriptionSeo;

        return $this;
    }

    public function getAlcohol(): ?string
    {
        return $this->alcohol;
    }

    public function setAlcohol(string $alcohol): self
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    public function getAroma(): ?string
    {
        return $this->aroma;
    }

    public function setAroma(string $aroma): self
    {
        $this->aroma = $aroma;

        return $this;
    }

    public function getAroma1(): ?string
    {
        return $this->aroma1;
    }

    public function setAroma1(string $aroma1): self
    {
        $this->aroma1 = $aroma1;

        return $this;
    }

    public function getAroma2(): ?string
    {
        return $this->aroma2;
    }

    public function setAroma2(string $aroma2): self
    {
        $this->aroma2 = $aroma2;

        return $this;
    }

    public function getAroma3(): ?string
    {
        return $this->aroma3;
    }

    public function setAroma3(string $aroma3): self
    {
        $this->aroma3 = $aroma3;

        return $this;
    }

    public function getIngredient(): ?string
    {
        return $this->ingredient;
    }

    public function setIngredient(string $ingredient): self
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    public function getBitterness(): ?int
    {
        return $this->bitterness;
    }

    public function setBitterness(int $bitterness): self
    {
        $this->bitterness = $bitterness;

        return $this;
    }

    public function getRoundness(): ?int
    {
        return $this->roundness;
    }

    public function setRoundness(int $roundness): self
    {
        $this->roundness = $roundness;

        return $this;
    }

    public function getAcidity(): ?int
    {
        return $this->acidity;
    }

    public function setAcidity(int $acidity): self
    {
        $this->acidity = $acidity;

        return $this;
    }

    public function getTitleSeo(): ?string
    {
        return $this->titleSeo;
    }

    public function setTitleSeo(string $titleSeo): self
    {
        $this->titleSeo = $titleSeo;

        return $this;
    }

    public function getIllustration2(): ?string
    {
        return $this->illustration2;
    }

    public function setIllustration2(string $illustration2): self
    {
        $this->illustration2 = $illustration2;

        return $this;
    }

    public function getImgMiniature(): ?string
    {
        return $this->imgMiniature;
    }

    public function setImgMiniature(string $imgMiniature): self
    {
        $this->imgMiniature = $imgMiniature;

        return $this;
    }
}
