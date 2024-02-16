<?php
require_once 'Car.php';

class OldCar extends Car
{
    private string $carburateur;

    public function getCarburateur(): string
    {
        return $this->carburateur;
    }

    public function setCarburateur(string $carburateur): void
    {
        $this->carburateur = $carburateur;
    }
}
