<?php
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/../Trait/Sconto.php';

class PetToy extends Prodotto{
    // AGE IN MESI 
protected $age;
use Sconto;
function __construct($param)
{
    parent::__construct($param);
    $this->age=$param['age'];
}

}