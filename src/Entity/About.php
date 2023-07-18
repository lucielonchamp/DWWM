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
    private ?string $block1_title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block1_text = null;

    #[ORM\Column(length: 255)]
    private ?string $block1_img = null;

    #[ORM\Column(length: 255)]
    private ?string $block2_img = null;

    #[ORM\Column(length: 255)]
    private ?string $block2_title_seo = null;

    #[ORM\Column(length: 255)]
    private ?string $block2_title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block2_text1 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block2_text2 = null;

    #[ORM\Column(length: 255)]
    private ?string $block3_title_seo = null;

    #[ORM\Column(length: 255)]
    private ?string $block3_title = null;

    #[ORM\Column(length: 255)]
    private ?string $block3_text = null;

    #[ORM\Column(length: 255)]
    private ?string $block3_img1 = null;

    #[ORM\Column(length: 255)]
    private ?string $block3_img2 = null;

    #[ORM\Column(length: 255)]
    private ?string $block3_img3 = null;

    #[ORM\Column(length: 255)]
    private ?string $block3_img4 = null;

    #[ORM\Column(length: 255)]
    private ?string $block4_img1 = null;

    #[ORM\Column(length: 255)]
    private ?string $block4_img2 = null;

    #[ORM\Column(length: 255)]
    private ?string $block4_title_seo = null;

    #[ORM\Column(length: 255)]
    private ?string $block4_title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block4_text = null;

    #[ORM\Column(length: 255)]
    private ?string $block4_btn = null;

    #[ORM\Column(length: 255)]
    private ?string $block4_btn_link = null;

    #[ORM\Column(length: 255)]
    private ?string $block5_title_seo = null;

    #[ORM\Column(length: 255)]
    private ?string $block5_title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $block5_text = null;

    #[ORM\Column(length: 255)]
    private ?string $block5_btn = null;

    #[ORM\Column(length: 255)]
    private ?string $block5_btn_link = null;

    #[ORM\Column(length: 255)]
    private ?string $block1_title_seo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlock1Title(): ?string
    {
        return $this->block1_title;
    }

    public function setBlock1Title(string $block1_title): static
    {
        $this->block1_title = $block1_title;

        return $this;
    }

    public function getBlock1Text(): ?string
    {
        return $this->block1_text;
    }

    public function setBlock1Text(string $block1_text): static
    {
        $this->block1_text = $block1_text;

        return $this;
    }

    public function getBlock1Img(): ?string
    {
        return $this->block1_img;
    }

    public function setBlock1Img(string $block1_img): static
    {
        $this->block1_img = $block1_img;

        return $this;
    }

    public function getBlock2Img(): ?string
    {
        return $this->block2_img;
    }

    public function setBlock2Img(string $block2_img): static
    {
        $this->block2_img = $block2_img;

        return $this;
    }

    public function getBlock2TitleSeo(): ?string
    {
        return $this->block2_title_seo;
    }

    public function setBlock2TitleSeo(string $block2_title_seo): static
    {
        $this->block2_title_seo = $block2_title_seo;

        return $this;
    }

    public function getBlock2Title(): ?string
    {
        return $this->block2_title;
    }

    public function setBlock2Title(string $block2_title): static
    {
        $this->block2_title = $block2_title;

        return $this;
    }

    public function getBlock2Text1(): ?string
    {
        return $this->block2_text1;
    }

    public function setBlock2Text1(string $block2_text1): static
    {
        $this->block2_text1 = $block2_text1;

        return $this;
    }

    public function getBlock2Text2(): ?string
    {
        return $this->block2_text2;
    }

    public function setBlock2Text2(string $block2_text2): static
    {
        $this->block2_text2 = $block2_text2;

        return $this;
    }

    public function getBlock3TitleSeo(): ?string
    {
        return $this->block3_title_seo;
    }

    public function setBlock3TitleSeo(string $block3_title_seo): static
    {
        $this->block3_title_seo = $block3_title_seo;

        return $this;
    }

    public function getBlock3Title(): ?string
    {
        return $this->block3_title;
    }

    public function setBlock3Title(string $block3_title): static
    {
        $this->block3_title = $block3_title;

        return $this;
    }

    public function getBlock3Text(): ?string
    {
        return $this->block3_text;
    }

    public function setBlock3Text(string $block3_text): static
    {
        $this->block3_text = $block3_text;

        return $this;
    }

    public function getBlock3Img1(): ?string
    {
        return $this->block3_img1;
    }

    public function setBlock3Img1(string $block3_img1): static
    {
        $this->block3_img1 = $block3_img1;

        return $this;
    }

    public function getBlock3Img2(): ?string
    {
        return $this->block3_img2;
    }

    public function setBlock3Img2(string $block3_img2): static
    {
        $this->block3_img2 = $block3_img2;

        return $this;
    }

    public function getBlock3Img3(): ?string
    {
        return $this->block3_img3;
    }

    public function setBlock3Img3(string $block3_img3): static
    {
        $this->block3_img3 = $block3_img3;

        return $this;
    }

    public function getBlock3Img4(): ?string
    {
        return $this->block3_img4;
    }

    public function setBlock3Img4(string $block3_img4): static
    {
        $this->block3_img4 = $block3_img4;

        return $this;
    }

    public function getBlock4Img1(): ?string
    {
        return $this->block4_img1;
    }

    public function setBlock4Img1(string $block4_img1): static
    {
        $this->block4_img1 = $block4_img1;

        return $this;
    }

    public function getBlock4Img2(): ?string
    {
        return $this->block4_img2;
    }

    public function setBlock4Img2(string $block4_img2): static
    {
        $this->block4_img2 = $block4_img2;

        return $this;
    }

    public function getBlock4TitleSeo(): ?string
    {
        return $this->block4_title_seo;
    }

    public function setBlock4TitleSeo(string $block4_title_seo): static
    {
        $this->block4_title_seo = $block4_title_seo;

        return $this;
    }

    public function getBlock4Title(): ?string
    {
        return $this->block4_title;
    }

    public function setBlock4Title(string $block4_title): static
    {
        $this->block4_title = $block4_title;

        return $this;
    }

    public function getBlock4Text(): ?string
    {
        return $this->block4_text;
    }

    public function setBlock4Text(string $block4_text): static
    {
        $this->block4_text = $block4_text;

        return $this;
    }

    public function getBlock4Btn(): ?string
    {
        return $this->block4_btn;
    }

    public function setBlock4Btn(string $block4_btn): static
    {
        $this->block4_btn = $block4_btn;

        return $this;
    }

    public function getBlock4BtnLink(): ?string
    {
        return $this->block4_btn_link;
    }

    public function setBlock4BtnLink(string $block4_btn_link): static
    {
        $this->block4_btn_link = $block4_btn_link;

        return $this;
    }

    public function getBlock5TitleSeo(): ?string
    {
        return $this->block5_title_seo;
    }

    public function setBlock5TitleSeo(string $block5_title_seo): static
    {
        $this->block5_title_seo = $block5_title_seo;

        return $this;
    }

    public function getBlock5Title(): ?string
    {
        return $this->block5_title;
    }

    public function setBlock5Title(string $block5_title): static
    {
        $this->block5_title = $block5_title;

        return $this;
    }

    public function getBlock5Text(): ?string
    {
        return $this->block5_text;
    }

    public function setBlock5Text(string $block5_text): static
    {
        $this->block5_text = $block5_text;

        return $this;
    }

    public function getBlock5Btn(): ?string
    {
        return $this->block5_btn;
    }

    public function setBlock5Btn(string $block5_btn): static
    {
        $this->block5_btn = $block5_btn;

        return $this;
    }

    public function getBlock5BtnLink(): ?string
    {
        return $this->block5_btn_link;
    }

    public function setBlock5BtnLink(string $block5_btn_link): static
    {
        $this->block5_btn_link = $block5_btn_link;

        return $this;
    }

    public function getBlock1TitleSeo(): ?string
    {
        return $this->block1_title_seo;
    }

    public function setBlock1TitleSeo(string $block1_title_seo): static
    {
        $this->block1_title_seo = $block1_title_seo;

        return $this;
    }
}
