<?php

require_once('AirBag.php');
require_once('SosSender.php');
require_once('Engine.php');
require_once('Airbag.php');
require_once('CrashSensor.php');
require_once('DoorLock.php');
require_once('EcuMediator.php');

// Ammélioration possible classe Car pour pouvoir créer plusieurs voitures
$airbag = new AirBag();
$crashSensor = new CrashSensor();
$doorLock = new DoorLock();
$engine = new Engine();
$sosSender = new SosSender();

$ecuMediator = new EcuMediator($airbag, $crashSensor, $doorLock, $engine, $sosSender);

echo "\r\nOn demande le démarrage du moteur\r\n";
$engine->start();

echo "\r\nOn demande l'arrêt du moteur\r\n";
$engine->stop();

echo "\r\nOn redémarre le moteur\r\n";
$engine->start();

echo "\r\nLe capteur de crash s'active\r\n";
$crashSensor->trigger();
