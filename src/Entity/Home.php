<?php

namespace App\Entity;

use App\Repository\HomeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HomeRepository::class)]
class Home
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $block1TitleSeo = null;

    #[ORM\Column(length: 255)]
    private ?string $block1Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block1Text = null;

    #[ORM\Column(length: 255)]
    private ?string $block1Btn = null;

    #[ORM\Column(length: 255)]
    private ?string $block1BtnLink = null;

    #[ORM\Column(length: 255)]
    private ?string $block3Img = null;

    #[ORM\Column(length: 255)]
    private ?string $block3TitleSeo = null;

    #[ORM\Column(length: 255)]
    private ?string $block3Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block3Text = null;

    #[ORM\Column(length: 255)]
    private ?string $block5TitleSeo = null;

    #[ORM\Column(length: 255)]
    private ?string $block5Title = null;

    #[ORM\Column(length: 255)]
    private ?string $block5Btn = null;

    #[ORM\Column(length: 255)]
    private ?string $block5BtnLink = null;

    #[ORM\Column(length: 255)]
    private ?string $block2TitleSeo = null;

    #[ORM\Column(length: 255)]
    private ?string $block2Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block2Text = null;

    #[ORM\Column(length: 255)]
    private ?string $block1Img = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlock1TitleSeo(): ?string
    {
        return $this->block1TitleSeo;
    }

    public function setBlock1TitleSeo(string $block1TitleSeo): static
    {
        $this->block1TitleSeo = $block1TitleSeo;

        return $this;
    }

    public function getBlock1Title(): ?string
    {
        return $this->block1Title;
    }

    public function setBlock1Title(string $block1Title): static
    {
        $this->block1Title = $block1Title;

        return $this;
    }

    public function getBlock1Text(): ?string
    {
        return $this->block1Text;
    }

    public function setBlock1Text(string $block1Text): static
    {
        $this->block1Text = $block1Text;

        return $this;
    }

    public function getBlock1Btn(): ?string
    {
        return $this->block1Btn;
    }

    public function setBlock1Btn(string $block1Btn): static
    {
        $this->block1Btn = $block1Btn;

        return $this;
    }

    public function getBlock1BtnLink(): ?string
    {
        return $this->block1BtnLink;
    }

    public function setBlock1BtnLink(string $block1BtnLink): static
    {
        $this->block1BtnLink = $block1BtnLink;

        return $this;
    }

    public function getBlock3Img(): ?string
    {
        return $this->block3Img;
    }

    public function setBlock3Img(string $block3Img): static
    {
        $this->block3Img = $block3Img;

        return $this;
    }

    public function getBlock3TitleSeo(): ?string
    {
        return $this->block3TitleSeo;
    }

    public function setBlock3TitleSeo(string $block3TitleSeo): static
    {
        $this->block3TitleSeo = $block3TitleSeo;

        return $this;
    }

    public function getBlock3Title(): ?string
    {
        return $this->block3Title;
    }

    public function setBlock3Title(string $block3Title): static
    {
        $this->block3Title = $block3Title;

        return $this;
    }

    public function getBlock3Text(): ?string
    {
        return $this->block3Text;
    }

    public function setBlock3Text(string $block3Text): static
    {
        $this->block3Text = $block3Text;

        return $this;
    }

    public function getBlock5TitleSeo(): ?string
    {
        return $this->block5TitleSeo;
    }

    public function setBlock5TitleSeo(string $block5TitleSeo): static
    {
        $this->block5TitleSeo = $block5TitleSeo;

        return $this;
    }

    public function getBlock5Title(): ?string
    {
        return $this->block5Title;
    }

    public function setBlock5Title(string $block5Title): static
    {
        $this->block5Title = $block5Title;

        return $this;
    }

    public function getBlock5Btn(): ?string
    {
        return $this->block5Btn;
    }

    public function setBlock5Btn(string $block5Btn): static
    {
        $this->block5Btn = $block5Btn;

        return $this;
    }

    public function getBlock5BtnLink(): ?string
    {
        return $this->block5BtnLink;
    }

    public function setBlock5BtnLink(string $block5BtnLink): static
    {
        $this->block5BtnLink = $block5BtnLink;

        return $this;
    }

    public function getBlock2TitleSeo(): ?string
    {
        return $this->block2TitleSeo;
    }

    public function setBlock2TitleSeo(string $block2TitleSeo): static
    {
        $this->block2TitleSeo = $block2TitleSeo;

        return $this;
    }

    public function getBlock2Title(): ?string
    {
        return $this->block2Title;
    }

    public function setBlock2Title(string $block2Title): static
    {
        $this->block2Title = $block2Title;

        return $this;
    }

    public function getBlock2Text(): ?string
    {
        return $this->block2Text;
    }

    public function setBlock2Text(string $block2Text): static
    {
        $this->block2Text = $block2Text;

        return $this;
    }

    public function getBlock1Img(): ?string
    {
        return $this->block1Img;
    }

    public function setBlock1Img(string $block1Img): static
    {
        $this->block1Img = $block1Img;

        return $this;
    }
}
