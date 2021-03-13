<?php

require_once('Payment.php');

class Card extends Payment
{
    public function __construct($number, $cvv, $date)
    {
        parent::__construct();
        $this->number = $number;
        $this->cvv = $cvv;
        $this->date = $date;
    }
}

?>