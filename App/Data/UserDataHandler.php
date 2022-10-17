<?php

require_once 'App/Entities/User.php';

class UserDataHandler
{
    public function getUser(): ?User
    {
        $userArray = [
            'name'  => 'John Doe',
            'email' => 'john.doe@gmail.com',
        ];

        if (empty($userArray)) return null;

        return User::create($userArray['name'], $userArray['email']);
    }
}