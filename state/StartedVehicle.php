<?php

class StartedVehicle implements VehicleStateInterface
{

    public function horn(): string
    {
        return "tut tut\r\n";
    }

    public function steer(): string
    {
        return "le véhicule tourne\r\n";
    }
}
