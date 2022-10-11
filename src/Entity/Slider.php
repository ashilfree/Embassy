<?php

namespace App\Entity;

use App\Repository\SliderRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=SliderRepository::class)
 * @Vich\Uploadable()
 */
class Slider
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
    private $caption;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $captionEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $captionFr;


    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $fileName;

    /**
     * @var File|null
     * @Vich\UploadableField(mapping="article_image", fileNameProperty="fileName")
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param mixed $caption
     */
    public function setCaption($caption): void
    {
        $this->caption = $caption;
    }

    /**
     * @return mixed
     */
    public function getCaptionEn()
    {
        return $this->captionEn;
    }

    /**
     * @param mixed $captionEn
     * @return Slider
     */
    public function setCaptionEn($captionEn)
    {
        $this->captionEn = $captionEn;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCaptionFr()
    {
        return $this->captionFr;
    }

    /**
     * @param mixed $captionFr
     * @return Slider
     */
    public function setCaptionFr($captionFr)
    {
        $this->captionFr = $captionFr;
        return $this;
    }




    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


}
