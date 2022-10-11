<?php

namespace App\Entity;

use App\Repository\AmbassadorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AmbassadorRepository::class)
 */
class Ambassador
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleFr;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contentEn;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contentFr;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getEntityName()
    {
        return Ambassador::class;
    }


    public function getTitleEn()
    {
        return $this->titleEn;
    }


    public function setTitleEn($titleEn): self
    {
        $this->titleEn = $titleEn;
        return $this;
    }

    public function getTitleFr()
    {
        return $this->titleFr;
    }


    public function setTitleFr($titleFr): self
    {
        $this->titleFr = $titleFr;
        return $this;
    }


    public function getContentEn()
    {
        return $this->contentEn;
    }


    public function setContentEn($contentEn): self
    {
        $this->contentEn = $contentEn;
        return $this;
    }


    public function getContentFr()
    {
        return $this->contentFr;
    }


    public function setContentFr($contentFr): self
    {
        $this->contentFr = $contentFr;
        return $this;
    }

}
