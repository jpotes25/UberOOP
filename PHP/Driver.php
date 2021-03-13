<?php

require_once('Acccount.php');

class Driver extends Account
{
    public function __construct($name, $email)
    {
        parent::__construct($name, $email);
    }
}
?>