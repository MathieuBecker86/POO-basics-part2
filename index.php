<?php
// index.php

require_once 'vehicle.php';
require_once 'truck.php';




$iveco = new Truck('pink', 3, 'fuel', 40);

var_dump($iveco);
echo "<br><br>";

echo $iveco->isLoaded().'<br>';
echo $iveco->forward().'<br>';
echo $iveco->brake().'<br>';

echo "<br><br>";

$renault = new Truck('green', 5, 'fuel', 30);

var_dump($renault);
echo "<br><br>";

echo $renault->setLoadCapacity(30);
echo $renault->isLoaded().'<br>';
echo $renault->forward().'<br>';
echo $renault->brake().'<br>';