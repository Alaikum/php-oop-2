<?php
class Prodotto{

    public $name;
    // PREZZO IN EURO 
    public $price;
    public $poster=null;
    public $description;
    public $brand;
    
    function __construct($param)
    {
      $this->name=$param['name'];
      $this->price=$param['price']; 
      $this->description=$param['description']; 
      $this->brand=$param['brand'];
    }


}