<?php

require_once 'Red.php';
require_once 'Blue.php';
require_once 'Toyota.php';
require_once 'Peugeot.php';

// On peut associer autant de vehicules avec autant de couleurs que l'on souhaite (composition)

$toyota = new Toyota('Yaris', new Red());
echo $toyota->getVehicleHomeScreenText();

$peugeot = new Peugeot('208', new Blue());
echo $peugeot->getVehicleHomeScreenText();

$toyota = new Toyota('Yaris', new Blue());
echo $toyota->getVehicleHomeScreenText();
