<?php

class OldCarBuilder implements CarBuilderInterface
{

    private OldCar $oldCar;

    public function reset(): void
    {
        $this->oldCar = new OldCar();
    }

    public function assembleSteeringWheel(): void
    {
        $this->oldCar->setSteeringWheel("Volant monté, par contre pas de direction assistée, séance de sport requise pour le futur driver\r\n");
    }

    public function assembleSeats(): void
    {
        $this->oldCar->setSeats("Sièges en pierre, ça pique comme un cactus\r\n");
    }

    public function assembleChassis(): void
    {
        $this->oldCar->setChassis("Chassis en bois, comme dans le chêne et le roseau\r\n");
    }

    public function assembleSpecificThings(): void
    {
       $this->oldCar->setCarburateur("Vieux carbu car pas encore d'injection\r\n");
    }

    public function getResult(): Car
    {
        return $this->oldCar;
    }
}
