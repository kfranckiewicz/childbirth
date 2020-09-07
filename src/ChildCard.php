<?php

declare(strict_types=1);

namespace App;

final class ChildCard
{
    private float $weight;
    private string $gender;
    private int $length;

    public function __construct($weight, $length, $gender)
    {
        $this->weight = $weight;
        $this->length = $length;
        $this->gender = $gender;
    }

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
