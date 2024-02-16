<?php

require_once('Component.php');

class Engine extends Component
{
    public function start(): void
    {
        echo "Moteur démarré\r\n";
        $this->mediator->notify($this, 'started');
    }

    public function stop(): void
    {
        echo "Moteur arrêté\r\n";
        $this->mediator->notify($this, 'stopped');
    }
}
