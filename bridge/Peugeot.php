<?php

require_once 'Vehicle.php';

class Peugeot extends Vehicle
{
    private string $model;

    public function __construct(string $model, ColorInterface $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public function getVehicleHomeScreenText(): string
    {
        return 'Voyant huile moteur allumé sur votre ' . $this->model . ' de couleur ' . $this->color->getColor() . "\r\n";
    }
}
