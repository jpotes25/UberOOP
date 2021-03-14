<?php

class Route
{
    // Atributes

    private $id;
    private $start;
    private $end;

    // Constructor

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
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

    public function getStart()
    {
        return $this->start;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd($end)
    {
        $this->end = $end;
    }

    // Methods
    
}