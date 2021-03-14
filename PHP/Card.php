<?php

require_once('Payment.php');

class Card extends Payment
{

    // Atributes

    private $number;
    private $cvv;
    private $date;

    // Constructor

    public function __construct($number, $cvv, $date)
    {
        parent::__construct();
        $this->number = $number;
        $this->cvv = $cvv;
        $this->date = $date;
    }

    // Getters & Setters

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getCvv()
    {
        return $this->cvv;
    }

    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($number)
    {
        $this->date = $date;
    }

    //Methods 

}

?>