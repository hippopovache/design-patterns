<?php

require_once 'MediatorInterface.php';

class EcuMediator implements MediatorInterface
{
    private AirBag $airBag;
    private CrashSensor $crashSensor;
    private DoorLock $doorLock;
    private Engine $engine;
    private SosSender $sosSender;

    public function __construct(Airbag $airbag, CrashSensor $crashSensor, DoorLock $doorLock, Engine $engine, SosSender $sosSender)
    {
        $this->airBag = $airbag;
        $this->crashSensor = $crashSensor;
        $this->doorLock = $doorLock;
        $this->engine = $engine;
        $this->sosSender = $sosSender;

        $this->airBag->setMediator($this);
        $this->crashSensor->setMediator($this);
        $this->doorLock->setMediator($this);
        $this->engine->setMediator($this);
        $this->sosSender->setMediator($this);
    }

    public function notify(Component $component, string $event): void
    {
        if ($component === $this->crashSensor && $event === 'triggered') {
            $this->crashProcedure();
        } else {
            if ($component === $this->engine && $event === 'started') {
                $this->doorLock->lock();
            } else {
                if ($component === $this->engine && $event === 'stopped') {
                    $this->doorLock->unlock();
                }
            }
        }
    }

    private function crashProcedure(): void
    {
        $this->airBag->trigger();
        $this->sosSender->trigger();
        $this->engine->stop();
    }
}
