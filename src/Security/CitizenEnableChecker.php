<?php

namespace App\Security;

use App\Entity\Citizen;
use Symfony\Component\Security\Core\Exception\DisabledException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class CitizenEnableChecker implements UserCheckerInterface
{
    /**
     * @inheritDoc
     */
    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof Citizen) {
            return;
        }


        if(!$user->isEnabled()){
            Throw new DisabledException('Your Account is disabled');
        }
    }

    /**
     * @inheritDoc
     */
    public function checkPostAuth(UserInterface $user)
    {
    }
}