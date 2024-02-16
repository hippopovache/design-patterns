<?php

require_once('Component.php');

class SosSender extends Component
{
    public function trigger(): void
    {
        echo "Message SOS envoyé\r\n";
        parent::trigger();
    }
}
