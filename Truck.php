<?php

require 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = ["fuel","electric",];
    /**
     * @var int
     */
    private $storageMax;
    /**
     * @var int
     */
    private $storage;
    /**
     * @var string
     */
    private $energy;
    /**
    * @var integer
    */
    protected $nbWheels;
    
    public function __construct(string $color, int $storageMax, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storageMax = $storageMax;
        $this->setEnergy($energy);
    }
    
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    
    public function isFull(){
        if ($this->storage >= $this->storageMax){  
            return "The truck is Full";         
        }else{
            return "The truck is in filling";
        }
    }

    public function getStorage()
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }
}
