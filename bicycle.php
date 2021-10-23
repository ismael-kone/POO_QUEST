<?php

class Bicycle
{
    private string $color = '';

    private int $currentSpeed = 0 ;

    private int $nbSeats = 1;
    
    private int $nbWheels = 2;




public function __construct(string $color, int $nbWheels)
{
    $this->color = $color;
    $this->nbWheels = $nbWheels;

}

public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake(): string
{
    $sentence = "";
    while($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "BRAKE !!";
    }
    $sentence .= "I'm Stopped !";
    return $sentence;
}

    /**
     * Get the value of color
     */ 
    public function getColor($color)
    {
        return " The bike color is " . $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed(): int 
    {
        return $this->currentSpeed;
    }

    /**
     * Set the value of currentSpeed
     *
     * @return  self
     */ 
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
        
    }

    /**
     * Get the value of nbWheels
     */ 
    public function getNbWheels()
    {
        return " the number of wheels is : " . $this->nbWheels;
    }

    /**
     * Get the value of nbSeats
     */ 
    public function getNbSeats()
    {
        return " the number of seat is : " . $this->nbSeats;
    }
}
