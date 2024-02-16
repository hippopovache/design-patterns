<?php

class CarBuildDirector
{
    private carBuilderInterface $carBuilder;

    public function __construct(carBuilderInterface $carBuilder)
    {
        $this->carBuilder = $carBuilder;
    }

    public function changeBuilder(CarBuilderInterface $carBuilder): void
    {
        $this->carBuilder = $carBuilder;
    }

    public function makeCar(): Car
    {
        $this->carBuilder->reset();
        $this->carBuilder->assembleChassis();
        $this->carBuilder->assembleSeats();
        $this->carBuilder->assembleSteeringWheel();
        $this->carBuilder->assembleChassis();
        $this->carBuilder->assembleSpecificThings();
        return $this->carBuilder->getResult();
    }
}
