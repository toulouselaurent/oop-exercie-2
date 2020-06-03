<?php

require "Bicycle.php";
require "Car.php";
require "Truck.php";


$truck = new Truck('green', 4, 4, 'electric');
echo $truck->forward();
echo $truck->brake();
$truck->setStorage(3);
var_dump($truck);
echo $truck->isFull();

$truck1 = new Truck('black', 14, 4, 'fuel');
$truck->setStorage(14);
var_dump($truck1);
echo $truck->isFull();