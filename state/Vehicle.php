<?php

require 'VehicleStateInterface.php';

class Vehicle implements VehicleStateInterface
{
    private VehicleStateInterface $vehicleState;

    public function __construct(VehicleStateInterface $vehicleState)
    {
        $this->vehicleState = $vehicleState;
    }

    public function horn(): string
    {
        return $this->vehicleState->horn();
    }

    public function steer(): string
    {
        return $this->vehicleState->steer();
    }

    public function changeState(VehicleStateInterface $vehicleState): void
    {
        $this->vehicleState = $vehicleState;
    }
}
