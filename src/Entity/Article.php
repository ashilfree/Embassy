<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Cocur\Slugify\Slugify;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 * @Vich\Uploadable()
 */
class Article
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleEn;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleFr;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionFr;

    /**
     * @var string| null
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
    private $published_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getSlug():string
    {
        return (new Slugify())->slugify(substr($this->title,0,20));
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

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }

    /**
     * @param mixed $titleEn
     * @return Article
     */
    public function setTitleEn($titleEn)
    {
        $this->titleEn = $titleEn;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * @param mixed $descriptionEn
     * @return Article
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitleFr()
    {
        return $this->titleFr;
    }

    /**
     * @param mixed $titleFr
     * @return Article
     */
    public function setTitleFr($titleFr)
    {
        $this->titleFr = $titleFr;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionFr()
    {
        return $this->descriptionFr;
    }

    /**
     * @param mixed $descriptionFr
     * @return Article
     */
    public function setDescriptionFr($descriptionFr)
    {
        $this->descriptionFr = $descriptionFr;
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

    /**
     * @param File $imageFile
     */
    public function setImageFile(File $imageFile): void
    {
        $this->imageFile = $imageFile;
        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->CreatedAt = new \DateTimeImmutable();
        }
    }

    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->published_at;
    }

    public function getStringPublishedAt()
    {
        return $this->published_at->format('Y-m-d');
    }

    public function setPublishedAt(\DateTimeInterface $published_at): self
    {
        $this->published_at = $published_at;

        return $this;
    }
}
