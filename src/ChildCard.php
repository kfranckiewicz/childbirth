<?php

declare(strict_types=1);

namespace App;

final class ChildCard
{
    public function __construct(private float $weight, private int $length, private string $gender) {}

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getGender(): string
    {
        return $this->gender;
    }
}
