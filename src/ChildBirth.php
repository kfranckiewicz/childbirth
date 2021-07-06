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

    public function setDateOfBirth(string $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    public function setAlbumUrl(string $albumUrl): self
    {
        $this->albumUrl = $albumUrl;
        return $this;
    }

    public function getChild(): Child
    {
        return $this->child;
    }

    public function generateReport(): string
    {
        return
            <<<EOL
                Raport z porodu: \n
                Data porodu: {$this->getDateOfBirth()} \n
                Miejsce porodu: {$this->hospital->getName()} \n
                Imię i nazwisko: {$this->getChild()->getFullName()} \n
                Waga: {$this->childCard->getWeight()} kg \n
                Długość: {$this->childCard->getLength()} cm \n
                Płeć: {$this->childCard->getGender()} \n
                Galeria: {$this->getAlbumUrl()} \n
            EOL;
    }
}
