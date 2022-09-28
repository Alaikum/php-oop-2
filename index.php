<?php
echo ('Shop On-Line');

include_once __DIR__ . '/app/Prodotto.php';
include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetAcessories.php';
include_once __DIR__ . '/app/PetToy.php';
include_once __DIR__ . '/app/User.php';



$data = [
    "name" => 'Crocchette',
    "description" => 'Vere crocchette di pollo per il vostro animaletto, da oggi il 40% in più di pollo',
    "brand" => 'Oh Pullu!',
    "price" => "9.99",
    "weight" => '1',
    "sconto" => 50,
];

$crocchette = new PetFood($data);
// var_dump($crocchette);

$dataDue = [
    "name" => 'Cuccia da esterno',
    "description" => 'Cuccia per il vostro animaletto, con aria condizionata e termocamino',
    "brand" => 'Cuccia Lì',
    "price" => "99.99",
    "garden" => true,

];

$cuccia = new PetAcessories($dataDue);
// var_dump($cuccia);

$dataTre = [
    "name" => 'Pollo in plastica',
    "description" => 'Pollo rumoroso per il vostro animaletto, fatto in materiale biodegradabile',
    "brand" => 'Pollistica',
    "price" => "14.99",
    "age" => '24'


];

$polloPlastica = new PetToy($dataTre);
// var_dump($polloPlastica);

// COMPRO 2 PACCHI DI CROCCHETTE 
$acquisti = [$crocchette, $cuccia, $polloPlastica, $polloPlastica, $polloPlastica, $crocchette];


// può diventare classe carrello...con due metodi 
// metti e togli prodotto , altro metodo che fa genera ordine
// che genera un'istanza della classe ordini 
$carrello = [
    [
        'quantità' => 2,
        'prodotti' => $crocchette
    ],
    [
        'quantità' => 3,
        'prodotti' => $polloPlastica

    ],
    [
        'quantità' => 1,
        'prodotti' => $cuccia

    ],
];

// $sommatotale=0;
// // var_dump($carrello);
// foreach($carrello as $pezzi){
//     var_dump($pezzi);
//     // var_dump( $pezzi['prodotti']->price);
//     $numProdotto=$pezzi['quantità'];
//    $prezzoProdotto=$pezzi['prodotti']->price;
//    $prezzoStock=$numProdotto*$prezzoProdotto;
//    echo $prezzoStock;
//    $sommatotale+=$prezzoStock;
// };
// echo '<br>' . $sommatotale;


// var_dump($acquisti);

$user = new User($carrello);
var_dump($carrello);

echo 'La tua spesa totale è: ' . $user->payment . '€';
