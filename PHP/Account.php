<?php

class Account
{

    // Atributes

    private $id;
    private $name;
    private $document;
    private $email;
    private $password;
    
    // Constructor
    
    public function __construct($name, $document)
    {
        $this->name     = $name;
        $this->document = $document;
    }

    // Getters and Setters 
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDocument()
    {
        return $this->document;
    }

    public function setDocument($document)
    {
        $this->document = $document;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    // Methods

    
}
