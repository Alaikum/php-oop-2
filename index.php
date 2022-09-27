<?php
echo ('Shop On-Line');

include_once __DIR__ . '/app/Prodotto.php';
include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetAcessories.php';
include_once __DIR__ . '/app/PetToy.php';



$data = [
    "name" => 'Crocchette',
    "description" => 'Vere crocchette di pollo per il vostro animaletto, da oggi il 40% in più di pollo',
    "brand" => 'Oh Pullu!',
    "price" => "9.99",
    "weight" => '1',
];

$crocchette = new PetFood($data);
var_dump($crocchette);

$dataDue = [
    "name" => 'Cuccia da esterno',
    "description" => 'Cuccia per il vostro animaletto, con aria condizionata e termocamino',
    "brand" => 'Cuccia Lì',
    "price" => "99.99",
    "garden"=>true,
   
];

$cuccia = new PetAcessories($dataDue);
var_dump($cuccia);

$dataTre = [
    "name" => 'Pollo in plastica',
    "description" => 'Pollo rumoroso per il vostro animaletto, fatto in materiale biodegradabile',
    "brand" => 'Pollistica',
    "price" => "14.99",
    "age"=>'24'
    
   
];

$polloPlastica = new PetToy($dataTre);
var_dump($polloPlastica);