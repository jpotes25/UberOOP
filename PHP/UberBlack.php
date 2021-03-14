<?php

require_once('Car.php');

class UberBlack extends Car
{
    // Atributes

    private $typeCarAccepted;
    private $seatsMaterial;

    // Constructor

    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }

    //Getters & Setters

    public function getTypeCarAccepted()
    {
        return $this->typeCarAccepted;
    }

    public function setTypeCarAccepted($typeCarAccepted)
    {
        $this->typeCarAccepted = $typeCarAccepted;
    }

    public function getSeatsMaterial()
    {
        return $this->seatsMaterial;
    }

    public function setSeatsMaterial($seatsMaterial)
    {
        $this->seatsMaterial = $seatsMaterial;
    }

    // Methods

}

?>