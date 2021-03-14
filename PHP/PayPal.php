<?php

require_once('Payment.php');

class Paypal extends Payment
{
    // Atributes

    private $email;

    // Construct

    public function __construct($email)
    {
        parent::__construct();
        $this->email = $email;
    }

    // Getters & Setters 

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    // Methods
    
}

?>