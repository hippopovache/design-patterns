<?php

require_once 'Vehicle.php';

class Toyota extends Vehicle
{
    private string $model;
    public function __construct(string $model, ColorInterface $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public function getVehicleHomeScreenText(): string
    {
        return 'La fiabilité à la japonaise, bienvenue dans votre ' . $this->model . ' de couleur ' . $this->color->getColor() . "\r\n";
    }
}
