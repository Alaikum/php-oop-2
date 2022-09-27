<?php
require_once __DIR__ . '/Prodotto.php';

class PetAcessories extends Prodotto{
protected $garden=false;
function __construct($param)
{
    parent::__construct($param);
    $this->garden=$param['garden'];
}

}