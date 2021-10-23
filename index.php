<?php

require_once 'Car.php';
require_once 'Bicycle.php';

$car = new Car($color = 'blue', $nbSeats = 5, $energy = 'electricity');
$bike = new Bicycle($color = 'White', $nbWheels = 2);

echo '<br> The Car is color ' . $car->getColor() . '<br>';
echo '<br> The Car has ' . $car->getNbWheels() . ' Wheels ' . '<br>';
echo '<br> The Car has ' . $car->getNbSeats() . ' Seats' . '<br>';
echo '<br> The Car uses ' . $car->getEnergy() . '<br>';
echo '<br> The Car energy level is  ' . $car->getEnergyLevel() . '<br>';


echo $car->forward();
echo '<br> Car Current Speed : ' . $car->getCurrentSpeed(50) . ' km/h ' . '<br>';
echo $car->brake();
echo '<br> Car Current Speed : ' . $car->getCurrentSpeed(50) . ' km/h ' . '<br>';
echo $car->brake();
echo '<br> Car Current Speed : ' . $car->getCurrentSpeed(0) . ' km/h ' . '<br>';
echo $car->start() ;


echo '<br>' . $bike->getColor($color) . '<br>';
echo '<br>' . $bike->getNbWheels() . '<br>';
