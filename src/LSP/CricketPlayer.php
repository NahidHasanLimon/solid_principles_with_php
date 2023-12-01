<?php

namespace LSP;

class CricketPlayer extends Player
{
    public $role;

    // No need to call parent::__construct() since Player constructor is simple
    public function __construct($name, $age, $role)
    {
        parent::__construct($name, $age);
        $this->role = $role;
    }

    public function train()
    {
        echo "{$this->name} ({$this->role}) is training on the cricket ground!\n";
    }
}