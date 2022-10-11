<?php

namespace App\Entity;

use App\Repository\SchedulerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SchedulerRepository::class)
 */
class Scheduler
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string")
     */
    private $startTime;

    /**
     * @ORM\Column(type="string")
     */
    private $endTime;

    /**
     * @ORM\Column(type="boolean")
     */
    private $by_admin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     * @return Scheduler
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     * @return Scheduler
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function getByAdmin(): ?bool
    {
        return $this->by_admin;
    }

    public function setByAdmin(bool $by_admin): self
    {
        $this->by_admin = $by_admin;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function serialize()
    {
        return [
            'id' => $this->id,
            'date' => $this->date,
            'sTime' => $this->startTime,
            'eTime' => $this->endTime,
            'byAdmin' => $this->by_admin
        ];
    }
}
