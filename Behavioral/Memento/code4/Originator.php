<?php

class Originator
{
    private string $state;
    public function setState(string $state): void
    {
        echo "Originator: Setting state to '$state'.\n";
        $this->state = $state;
    }
}