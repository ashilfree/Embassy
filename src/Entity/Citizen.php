<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * @ORM\Entity(repositoryClass="App\Repository\CitizenRepository")
 * @UniqueEntity("email")
 * @UniqueEntity("fullName")
 */
class Citizen implements UserInterface,\Serializable
{
    const ROLE_CITIZEN = 'ROLE_CITIZEN';
    const DEFAULT_ROLES = [self::ROLE_CITIZEN];
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"read:comment"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(min=6, max=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{7,}/",
     *     message="the password must be seven characters or more and contain a less one digit, one uppercase letter and one lower case letter"
     * )
     */
    private $password;

    /**
     * @Assert\NotBlank()
     * @Assert\Expression(
     *     "this.getPassword() === this.getRetypedPassword()",
     *     message="Password does not match"
     * )
     */
    private $retypedPassword;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(min=6, max=255)
     * @Groups({"read:comment"})
     */
    private $fullName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email()
     * @Assert\Length(min=6, max=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phone;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enabled;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $confirmationToken;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];


    public function __construct()
    {
        $this->roles = self::DEFAULT_ROLES;
        $this->enabled = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    /**
     * @inheritDoc
     */
    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->email,
            $this->phone,
            $this->password
        ]);
    }

    /**
     * @inheritDoc
     */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->username,
            $this->email,
            $this->phone,
            $this->password
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER

        return array_unique($roles);
    }

    /**
     * @param mixed $id
     * @return Citizen
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param array $roles
     * @return Citizen
     */
    public function setRoles(array $roles): Citizen
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    public function getRetypedPassword()
    {
        return $this->retypedPassword;
    }

    public function setRetypedPassword($retypedPassword)
    {
        $this->retypedPassword = $retypedPassword;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    public function setConfirmationToken($confirmationToken): void
    {
        $this->confirmationToken = $confirmationToken;
    }

    public function __toString()
    {
        return $this->getFullName();
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
}
