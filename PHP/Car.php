<?php

class Car
{
    // Atributes

    private $id;
    private $license;
    private $driver;
    private $passenger;

    // Constructor

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver  = $driver;
    }

    // Getters & Setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLicense()
    {
        return $this->license;
    }

    public function setLicense($license)
    {
        $this->license = $license;
    }
    
    public function getDriver()
    {
        return $this->driver;
    }

    public function setDriver($driver)
    {
        $this->driver = $driver;
    }

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;
    }

    // Methods 

    public function printDataCar()
    {
        echo 
        "License: " . $this->license .
        " Driver: " . $this->driver->getName() .
        " Document: " . $this->driver->getDocument();
    }
}

?>