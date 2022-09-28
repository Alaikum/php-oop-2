<?php
class Prodotto
{

  public $name;
  // PREZZO IN EURO 
  public $price;
  public $poster = null;
  public $description;
  public $brand;

  function __construct($param)
  {
    $this->name = $param['name'];
    // $this->price = $param['price'];
    $this->setPrice($param);
    $this->description = $param['description'];
    $this->brand = $param['brand'];
  }

  public function setPrice($param)
  {
    $paramPrice = $param['price'];
    if($paramPrice>0){
      $this->price=$paramPrice;
    }else{
      throw new Exception('Stai regalando i prodotti!!!');
    }
  }
}
