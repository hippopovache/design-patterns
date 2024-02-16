<?php

require_once('Component.php');

class CrashSensor extends Component
{
    public function trigger(): void
    {
        echo "Crash détécté, mauvais conducteur détécté bip bip bip\r\n";
        parent::trigger();
    }
}
