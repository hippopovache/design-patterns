<?php

class NewCarBuilder implements CarBuilderInterface
{
    private NewCar $newCar;

    public function reset(): void
    {
        $this->newCar = new NewCar();
    }

    public function assembleSteeringWheel(): void
    {
        $this->newCar->setSteeringWheel("Super volant avec direction assistée\r\n");
    }

    public function assembleSeats(): void
    {
        $this->newCar->setSeats("Sièges chauffants ventilés rasants massants qui te servent le café tout en parlant doucement dans ton oreille\r\n");
    }

    public function assembleChassis(): void
    {
        $this->newCar->setChassis("Super chassis moderne ultra protecteur pour le passager qui a payé une fortune sa voiture!\r\n");
    }

    public function assembleSpecificThings(): void
    {
        $this->newCar->setGps("Elle a le GPS ! bon 3 fps l'écran mais elle l'a\r\n");
        $this->newCar->setSeatBelt("Quelle modernité, une ceinture pour étrangler son voisin de bord blablacar quand il nous énèrve\r\n");
    }

    public function getResult(): Car
    {
        return $this->newCar;
    }
}
