<?php

require_once 'App/Data/UserDataHandler.php';

class UserService
{
    public function getUser(): ?User
    {
        $udh = new UserDataHandler();
        $user = $udh->getUser();

        if ($user instanceof User) {
            $user->setName(strtoupper($user->getName()));

            return $user;
        }

        return null;
    }
}