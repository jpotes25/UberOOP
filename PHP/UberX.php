<?php

require_once('Car.php');

class UberX extends Car
{
    // Atributes

    private $brand;
    private $model;

    //Constructor

    public function __construct($license, $driver, $brand, $model)
    {
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    // Getters & Setters

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    //Methods

    public function printDataCar()
    {
        parent::printDataCar();
        echo " Marca : " . $this->brand .
             " Model : " . $this->model;
    }
}

?>