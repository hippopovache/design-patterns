<?php

abstract class Vehicle
{
    protected ColorInterface $color;

    abstract protected function getVehicleHomeScreenText(): string;
}
