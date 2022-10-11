<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BookingRepository::class)
 */
class Booking
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
    private $fullName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $civilNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $visit;

    /**
     * @ORM\OneToOne(targetEntity=Scheduler::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $schedule;

     public function getId(): ?int
    {
        return $this->id;
    }

     public function getFullName(): ?string
     {
         return $this->fullName;
     }

     public function setFullName(string $fullName): self
     {
         $this->fullName = $fullName;

         return $this;
     }

     public function getCivilNumber(): ?string
     {
         return $this->civilNumber;
     }

     public function setCivilNumber(string $civilNumber): self
     {
         $this->civilNumber = $civilNumber;

         return $this;
     }

     public function getPhone(): ?string
     {
         return $this->phone;
     }

     public function setPhone(string $phone): self
     {
         $this->phone = $phone;

         return $this;
     }

     public function getEmail(): ?string
     {
         return $this->email;
     }

     public function setEmail(string $email): self
     {
         $this->email = $email;

         return $this;
     }

     public function getVisit(): ?string
     {
         return $this->visit;
     }

     public function setVisit(string $visit): self
     {
         $this->visit = $visit;

         return $this;
     }

     public function getSchedule(): ?Scheduler
     {
         return $this->schedule;
     }

     public function setSchedule(Scheduler $schedule): self
     {
         $this->schedule = $schedule;

         return $this;
     }

    /**
     * @inheritDoc
     */
    public function serialize()
    {
        return [
            'id' => $this->id,
            'fullName' => $this->fullName,
            'email' => $this->email,
            'phone' => $this->phone,
            'civilNumber' => $this->civilNumber,
            'visit' => $this->visit
        ];
    }

}
