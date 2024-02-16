<?php
require_once 'Car.php';

class NewCar extends Car
{
    private string $seatBelt;
    private string $gps;

    public function getSeatBelt(): string
    {
        return $this->seatBelt;
    }

    public function setSeatBelt(string $seatBelt): void
    {
        $this->seatBelt = $seatBelt;
    }

    public function getGps(): string
    {
        return $this->gps;
    }

    public function setGps(string $gps): void
    {
        $this->gps = $gps;
    }
}
