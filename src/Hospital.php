<?php

declare(strict_types=1);

namespace App;

final class Hospital
{
    public function __construct(private string $name) {}

    public function getName(): string
    {
        return $this->name;
    }
}
