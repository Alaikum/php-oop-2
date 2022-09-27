<?php
class User
{

    private $name = 'Utente#326';
    protected $acquisti = [];
    private $payment=0;


    function __construct($param)
    {
        $this->acquisti=$param;
        $this->setPayment($param);
    }

    
    public function setPayment($param)
    {
        foreach ($param as $value) {
            $this->payment += $value->price;
        }
    }

}
