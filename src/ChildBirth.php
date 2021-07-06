<?php

declare(strict_types=1);

namespace App;

final class ChildBirth
{
    private string $dateOfBirth;
    private string $albumUrl;

    public function __construct(private Child $child, private ChildCard $childCard, private Hospital $hospital) {}

    private function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }

    private function getAlbumUrl(): string
    {
        return $this->albumUrl;
    }

    public function setDateOfBirth(string $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setAlbumUrl(string $albumUrl): void
    {
        $this->albumUrl = $albumUrl;
    }

    public function getChild(): Child
    {
        return $this->child;
    }

    public function printResult(): void
    {
        echo "\n Raport z porodu: \n";
        echo "Data porodu: {$this->getDateOfBirth()} \n";
        echo "Miejsce porodu: {$this->hospital->getName()} \n";
        echo "Imię i nazwisko: {$this->getChild()->getName()} \n";
        echo "Waga: {$this->childCard->getWeight()} kg \n";
        echo "Długość: {$this->childCard->getLength()} cm \n";
        echo "Płeć: {$this->childCard->getGender()} \n";
        echo "Galeria: {$this->getAlbumUrl()} \n";
    }
}
