<?php

require_once 'ColorInterface.php';

class Red implements ColorInterface
{

    public function getColor(): string
    {
        return 'rouge';
    }
}
