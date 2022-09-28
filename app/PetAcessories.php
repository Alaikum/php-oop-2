<?php
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/../Trait/Sconto.php';

class PetAcessories extends Prodotto{
protected $garden=false;
use Sconto;
function __construct($param)
{
    parent::__construct($param);
    $this->garden=$param['garden'];
}

}