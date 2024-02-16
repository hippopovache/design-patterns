<?php

require_once 'CarBuildDirector.php';
require_once 'CarBuilderInterface.php';
require_once 'NewCar.php';
require_once 'OldCar.php';
require_once 'NewCarBuilder.php';
require_once 'OldCarBuilder.php';

$director = new CarBuildDirector(new OldCarBuilder());
var_dump($director->makeCar());

$director->changeBuilder(new NewCarBuilder());
var_dump($director->makeCar());
