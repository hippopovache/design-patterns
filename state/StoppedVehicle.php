<?php

class StoppedVehicle implements VehicleStateInterface
{

    public function horn(): string
    {
        return "le véhicule n'est pas démarré donc le klaxon ne fonctionne pas\r\n";
    }

    public function steer(): string
    {
        return "Pas de direction assistée\r\n";
    }
}
