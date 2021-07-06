<?php

declare(strict_types=1);

namespace App;

final class Child
{
    public function __construct(private string $firstName, private string $lastName) {}

    public function getFullName(): string
    {
        return "$this->firstName $this->lastName";
    }
}