<?php

interface MediatorInterface
{
    public function notify(Component $component, string $event): void;
}
