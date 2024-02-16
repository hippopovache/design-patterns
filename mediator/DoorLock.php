<?php

require_once('Component.php');

class DoorLock extends Component
{
    public function lock(): void
    {
        echo "Porte vérouillée\r\n";
        $this->mediator->notify($this, 'locked');
    }

    public function unlock(): void
    {
        echo "Porte dévérouillée\r\n";
        $this->mediator->notify($this, 'unlocked');
    }
}
