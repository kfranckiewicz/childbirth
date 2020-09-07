<?php

declare(strict_types=1);

namespace App;

final class Child
{
    private string $firstName;
    private string $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }
}