<?php

namespace App\DataFixtures;

use App\Entity\User;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;


    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('embassy_agent');
        $user->setPassword($this->encoder->encodePassword($user, 'Embag$2020'));
        $user->setRoles(['ROLE_USER']);
        $user->setEnabled(true);
        $manager->persist($user);

        $manager->flush();
    }
}
