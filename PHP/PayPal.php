<?php

require_once('Payment.php');

class Paypal extends Payment
{
    public function __construct($email)
    {
        parent::__construct();
        $this->email = $email;
    }
}

?>