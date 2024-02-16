<?php

require 'Ressource.php';

// Il ne peut y avoir qu'une seule instance de la classe ressource

$ressource = Ressource::getInstance();
echo $ressource->getString();
var_dump($ressource);

$ressource2 = Ressource::getInstance();
echo $ressource2->getString();
var_dump($ressource2);
