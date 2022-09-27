<?php
require_once __DIR__ . '/Prodotto.php';

class PetToy extends Prodotto{
    // AGE IN MESI 
protected $age;
function __construct($param)
{
    parent::__construct($param);
    $this->age=$param['age'];
}

}