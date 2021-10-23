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
}
