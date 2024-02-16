<?php

require_once('Component.php');

class AirBag extends Component
{
    public function trigger(): void
    {
        echo "Airbag déployé\r\n";
        parent::trigger();
    }
}
