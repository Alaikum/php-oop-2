<?php
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/../Trait/Sconto.php';

class PetFood extends Prodotto{
    // WEIGHT IN KG
protected $weight;
use Sconto;
function __construct($param)
{
    parent::__construct($param);
    $this->weight=$param['weight'];
    // $this-> getSconto();
    $this-> setSconto($param);
}

}