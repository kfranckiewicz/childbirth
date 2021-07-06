<?php

declare(strict_types=1);

use App\Child;
use App\ChildCard;
use App\ChildBirth;
use App\Hospital;

require 'vendor/autoload.php';

$childBirth = new ChildBirth(
    new Child('Urszula', 'Franckiewicz'),
    new ChildCard(3.45, 56, 'kobieta'),
    new Hospital('Szpital św. Wojciecha w Gdańsku'),
);
echo $childBirth
    ->setDateOfBirth('07-09-2020 3:28')
    ->setAlbumUrl('https://drive.google.com/drive/folders/1jqD_F-QARiXanvWnUK-Yb8wr5d7pyHcA?usp=sharing')
    ->generateReport();