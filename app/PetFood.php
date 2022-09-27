<?php
require_once __DIR__ . '/Prodotto.php';

class PetFood extends Prodotto{
    // WEIGHT IN KG
protected $weight;
function __construct($param)
{
    parent::__construct($param);
    $this->weight=$param['weight'];
}

}