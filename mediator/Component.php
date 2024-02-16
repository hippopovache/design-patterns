<?php

class Component
{
    protected MediatorInterface $mediator;

    public function setMediator(MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }

    public function trigger(): void
    {
        $this->mediator->notify($this, 'triggered');
    }
}
