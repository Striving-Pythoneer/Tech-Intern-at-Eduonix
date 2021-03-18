<?php
include 'classes.php';

$car1 = new Car('Jeep', 'Terrian','Navy Blue');
echo $car1->getColor();

$car2 = new Car('Innova', 'i20','Black');
echo $car2->getColor();

//$car1 = new Car();
//$car1 -> make = 'Toyota';
//$car1 -> make = 'Honda'; #once changed the previous one is not accessible
//echo $car1 -> make;
//$car1 -> setMake('Chevy');
//$car1 -> start();
//echo $car1 -> getMake();
?>