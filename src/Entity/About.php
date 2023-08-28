<?php

namespace App\Entity;

use App\Repository\AboutRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AboutRepository::class)]
class About
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $block1Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block1Text = null;

    #[ORM\Column(length: 255)]
    private ?string $block1Img = null;

    #[ORM\Column(length: 255)]
    private ?string $block2Img = null;

    #[ORM\Column(length: 255)]
    private ?string $block2TitleSeo = null;

    #[ORM\Column(length: 255)]
    private ?string $block2Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block2Text1 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block2Text2 = null;

    #[ORM\Column(length: 255)]
    private ?string $block3TitleSeo = null;

    #[ORM\Column(length: 255)]
    private ?string $block3Title = null;

    #[ORM\Column(length: 255)]
    private ?string $block3Text = null;

    #[ORM\Column(length: 255)]
    private ?string $block3Img1 = null;

    #[ORM\Column(length: 255)]
    private ?string $block3Img2 = null;

    #[ORM\Column(length: 255)]
    private ?string $block3Img3 = null;

    #[ORM\Column(length: 255)]
    private ?string $block3Img4 = null;

    #[ORM\Column(length: 255)]
    private ?string $block4Img1 = null;

    #[ORM\Column(length: 255)]
    private ?string $block4Img2 = null;

    #[ORM\Column(length: 255)]
    private ?string $block4TitleSeo = null;

    #[ORM\Column(length: 255)]
    private ?string $block4Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block4Text = null;

    #[ORM\Column(length: 255)]
    private ?string $block4Btn = null;

    #[ORM\Column(length: 255)]
    private ?string $block4BtnLink = null;

    #[ORM\Column(length: 255)]
    private ?string $block5Titleseo = null;

    #[ORM\Column(length: 255)]
    private ?string $block5Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block5Text = null;

    #[ORM\Column(length: 255)]
    private ?string $block5Btn = null;

    #[ORM\Column(length: 255)]
    private ?string $block5BtnLink = null;

    #[ORM\Column(length: 255)]
    private ?string $block1TitleSeo = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBlock1Img(): ?string
    {
        return $this->block1Img;
    }

    public function setBlock1Img(string $block1Img): static
    {
        $this->block1Img = $block1Img;

        return $this;
    }

    public function getBlock2Img(): ?string
    {
        return $this->block2Img;
    }

    public function setBlock2Img(string $block2Img): static
    {
        $this->block2Img = $block2Img;

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

    public function getBlock2Text1(): ?string
    {
        return $this->block2Text1;
    }

    public function setBlock2Text1(string $block2Text1): static
    {
        $this->block2Text1 = $block2Text1;

        return $this;
    }

    public function getBlock2Text2(): ?string
    {
        return $this->block2Text2;
    }

    public function setBlock2Text2(string $block2Text2): static
    {
        $this->block2Text2 = $block2Text2;

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

    public function getBlock3Img1(): ?string
    {
        return $this->block3Img1;
    }

    public function setBlock3Img1(string $block3Img1): static
    {
        $this->block3Img1 = $block3Img1;

        return $this;
    }

    public function getBlock3Img2(): ?string
    {
        return $this->block3Img2;
    }

    public function setBlock3Img2(string $block3Img2): static
    {
        $this->block3Img2 = $block3Img2;

        return $this;
    }

    public function getBlock3Img3(): ?string
    {
        return $this->block3Img3;
    }

    public function setBlock3Img3(string $block3Img3): static
    {
        $this->block3Img3 = $block3Img3;

        return $this;
    }

    public function getBlock3Img4(): ?string
    {
        return $this->block3Img4;
    }

    public function setBlock3Img4(string $block3Img4): static
    {
        $this->block3Img4 = $block3Img4;

        return $this;
    }

    public function getBlock4Img1(): ?string
    {
        return $this->block4Img1;
    }

    public function setBlock4Img1(string $block4Img1): static
    {
        $this->block4Img1 = $block4Img1;

        return $this;
    }

    public function getBlock4Img2(): ?string
    {
        return $this->block4Img2;
    }

    public function setBlock4Img2(string $block4Img2): static
    {
        $this->block4Img2 = $block4Img2;

        return $this;
    }

    public function getBlock4TitleSeo(): ?string
    {
        return $this->block4TitleSeo;
    }

    public function setBlock4TitleSeo(string $block4TitleSeo): static
    {
        $this->block4TitleSeo = $block4TitleSeo;

        return $this;
    }

    public function getBlock4Title(): ?string
    {
        return $this->block4Title;
    }

    public function setBlock4Title(string $block4Title): static
    {
        $this->block4Title = $block4Title;

        return $this;
    }

    public function getBlock4Text(): ?string
    {
        return $this->block4Text;
    }

    public function setBlock4Text(string $block4Text): static
    {
        $this->block4Text = $block4Text;

        return $this;
    }

    public function getBlock4Btn(): ?string
    {
        return $this->block4Btn;
    }

    public function setBlock4Btn(string $block4Btn): static
    {
        $this->block4Btn = $block4Btn;

        return $this;
    }

    public function getBlock4BtnLink(): ?string
    {
        return $this->block4BtnLink;
    }

    public function setBlock4BtnLink(string $block4BtnLink): static
    {
        $this->block4BtnLink = $block4BtnLink;

        return $this;
    }

    public function getBlock5TitleSeo(): ?string
    {
        return $this->block5Titleseo;
    }

    public function setBlock5TitleSeo(string $block5Titleseo): static
    {
        $this->block5Titleseo = $block5Titleseo;

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

    public function getBlock5Text(): ?string
    {
        return $this->block5Text;
    }

    public function setBlock5Text(string $block5Text): static
    {
        $this->block5Text = $block5Text;

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

    public function getBlock1TitleSeo(): ?string
    {
        return $this->block1TitleSeo;
    }

    public function setBlock1TitleSeo(string $block1TitleSeo): static
    {
        $this->block1TitleSeo = $block1TitleSeo;

        return $this;
    }
}
