<?php

class Ressource
{
    private static Ressource $ressource;

    private function __construct()
    {
        echo "construct\r\n";
    }

    public static function getInstance(): Ressource
    {
        if (!isset(self::$ressource)) {
            self::$ressource = new Ressource();
        }
        return self::$ressource;
    }

    public function getString(): string
    {
        return 'retour getString';
    }
}
