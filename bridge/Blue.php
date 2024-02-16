<?php

require_once 'ColorInterface.php';

class Blue implements ColorInterface
{

    public function getColor(): string
    {
        return 'bleu';
    }
}
