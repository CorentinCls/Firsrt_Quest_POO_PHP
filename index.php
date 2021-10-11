<?php

require_once ('Car.php');
require_once ('Bicycle.php');

$renault208 = new Car("Blanche", 5, "Fuel");
$bikeForRoad = new Bicycle("Back");

var_dump($renault208);
var_dump($bikeForRoad);

echo $renault208->start() . PHP_EOL;
echo $renault208->forward() . PHP_EOL;
echo $renault208->brake() . PHP_EOL;

echo $bikeForRoad->forward() . PHP_EOL;
echo $bikeForRoad->brake() . PHP_EOL;

