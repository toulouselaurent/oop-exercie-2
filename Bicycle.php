<?php

  // Bicycle.php

  class Bicycle
  {
      /**
       * @var string
       */
      private $color;

      /**
      * @var integer
      */
      private $currentSpeed;
      /**
      * @var integer
      */
      private $nbSeats = 1;
      /**
      * @var integer
      */
      private $nbWheels = 2;

      public function forward()
      {
          $this->currentSpeed = 15;
  
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
    /**
     * @param string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }     
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }
  }
