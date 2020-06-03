<?php

class CAR{

    /**
     * @var integer
    */
    private $nbWheels;
    /**
     * @var integer
    */
    private $currentSpeed;
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
    */
    private $nbSeats;
    /**
     * @var string
    */
    private $energy;
    /**
     * @var integer
    */
    private $energyLevel;

    public function __construct(string $color,int $nbSeats,string $energy){
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start()
    {
        return "La voiture démarre ! <br>";
    }

    public function forward()
    {
        $this->currentSpeed = 50;

        return "Go !";
    }

    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
}