<?php
declare(strict_types=1);

namespace Alura;

require 'autoload.php';

$nomes = "Leonardo, Jojo, Claudia, Pipica";

$arrayNomes =  explode(", ", $nomes);

foreach ($arrayNomes as $nome) {
    echo "<p>$nome</p>";
}

ArrayUtils::remove(array_search("Pipica", $arrayNomes), $arrayNomes);

foreach ($arrayNomes as $nome) {
    echo "<p>$nome</p>";
}

$toArray = implode(", ", $arrayNomes);

echo "<p>$toArray</p>";

$arrayTest = ['port' => 3,
    'esp'=> 4,
    'ing' => 30];


$media = Calculadora::getMedia($arrayTest);

echo "<p>A média é: {$media}</p>";

echo "<pre>";
var_dump($arrayTest);
echo "</pre>";