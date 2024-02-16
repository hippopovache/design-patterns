<?php

require 'Vehicle.php';
require 'StoppedVehicle.php';
require 'StartedVehicle.php';

echo "Lancement\r\n";

// En changeant l'état du véhicule on va avoir un comportement différent au klaxon et au fait de tourner le volant

$vehicle = new Vehicle(new StoppedVehicle());

echo $vehicle->horn();
echo $vehicle->steer();

// On donne un nouvel etat à notre Véhicule pour changer son comportement
$vehicle->changeState(new StartedVehicle());

echo $vehicle->horn();
echo $vehicle->steer();
