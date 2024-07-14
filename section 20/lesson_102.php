<?php

require "Car.php";


$car01 = new Car("Toyota", "Land Cruiser Prado", "SUV", 2024, "Black");

$car02 = new Car("Toyota", "Corolla", "Sedan", 2025, "Red Wine");

echo $car01->getInfo();
echo "<br>";
echo $car02->getName();
