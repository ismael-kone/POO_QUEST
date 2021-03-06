<?php

require_once 'car.php';
require_once 'bicycle.php';

$ar = new Car($color = 'blue', $nbSeats = 5, $energy = 'electricity');
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
echo '<br>' . $bike->getNbSeats() . '<br>';

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(15) . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(15). ' km/h' . '<br>';
echo $bike->brake();
