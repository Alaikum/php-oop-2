<?php
class User
{

    private $name = 'Utente#326';
    protected $acquisti = [];
    public $payment=0;


    function __construct($param)
    {
        $this->acquisti=$param;
        $this->setPayment($param);
    }

    
    public function setPayment($param)
    {
        foreach ($param as $value) {
            // $this->payment += $value->price;
            // var_dump($value);
            // var_dump( $value['prodotti']->price);
            $numProdotto=$value['quantità'];
           $prezzoProdotto=$value['prodotti']->price;
           $prezzoStock=$numProdotto*$prezzoProdotto;
        //    echo $prezzoStock;
           $this->payment+=$prezzoStock;
        }
    }

}
