<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 * @Vich\Uploadable()
 */
class Document
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string|null
     */
    private $brochure;

    /**
     * @Vich\UploadableField(mapping="document_file", fileNameProperty="brochure")
     * @var File|null
     */
    private $brochureFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name_ar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name_en;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $size;



    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getBrochure(): ?string
    {
        return $this->brochure;
    }

    /**
     * @param string|null $brochure
     * @return Document
     */
    public function setBrochure(?string $brochure): Document
    {
        $this->brochure = $brochure;
        return $this;
    }

    /**
     * @return File|null
     */
    public function getBrochureFile(): ?File
    {
        return $this->brochureFile;
    }

    /**
     * @param File|null $brochureFile
     * @return Document
     */
    public function setBrochureFile(?File $brochureFile): Document
    {
        $this->brochureFile = $brochureFile;

        $this->setSize($this->brochureFile->getSize());

        return $this;
    }

    public function getNameAr(): ?string
    {
        return $this->name_ar;
    }

    public function setNameAr(?string $name_ar): self
    {
        $this->name_ar = $name_ar;

        return $this;
    }

    public function getNameEn(): ?string
    {
        return $this->name_en;
    }

    public function setNameEn(?string $name_en): self
    {
        $this->name_en = $name_en;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }



    public function setSize(?float $size): self
    {
        $this->size = $size;

        return $this;
    }


}