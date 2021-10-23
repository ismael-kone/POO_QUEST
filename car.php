<?php

class Car

{
    private int $nbWheels = 4;

    private int $currentSpeed = 50;

    private string $color = '';

    private int $nbSeats = 5;

    private string $energy = '';

    private int $energyLevel = 10;

public function __construct(string $color, int $nbSeats, string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
}

public function forward(): string
{
    $this->currentSpeed = 50;

    return "Go !";
}

public function brake(): string
{
    $sentence = "";
    while($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "STOP !!";
    }
    $sentence .= "I'm Stopped !";
    return $sentence;
}

public function start(): string
{
    $sentence1 = "";
    if($this->currentSpeed === 0)
    $sentence1 .= "Start !";{
          return $sentence1;
    }
  
}


    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed($currentSpeed)
    {
        return $this->currentSpeed;
    }

    /**
     * Set the value of currentSpeed
     *
     * @return  self
     */ 
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }

    /**
     * Get the value of nbWheels
     */ 
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get the value of nbSeats
     */ 
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Get the value of energy
     */ 
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Get the value of energyLevel
     */ 
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
}



