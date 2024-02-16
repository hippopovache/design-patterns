<?php

class Car
{
    private string $steeringWheel;
    private string $seats;
    private string $chassis;

    public function getSteeringWheel(): string
    {
        return $this->steeringWheel;
    }

    public function setSteeringWheel(string $steeringWheel): void
    {
        $this->steeringWheel = $steeringWheel;
    }

    public function getSeats(): string
    {
        return $this->seats;
    }

    public function setSeats(string $seats): void
    {
        $this->seats = $seats;
    }

    public function getChassis(): string
    {
        return $this->chassis;
    }

    public function setChassis(string $chassis): void
    {
        $this->chassis = $chassis;
    }
}
