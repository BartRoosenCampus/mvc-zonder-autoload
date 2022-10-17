<?php

class User
{
    private ?string $name;
    private ?string $email;

    private function __construct(string $name = null, string $email = null)
    {
        $this->name  = $name;
        $this->email = $email;
    }

    public static function create(string $name = null, string $email = null)
    {
        return new User($name, $email);
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
}