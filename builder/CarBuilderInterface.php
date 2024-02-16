<?php

interface CarBuilderInterface
{
    public function reset(): void;

    public function assembleSteeringWheel(): void;

    public function assembleSeats(): void;

    public function assembleChassis(): void;

    public function assembleSpecificThings(): void;

    public function getResult(): Car;
}
