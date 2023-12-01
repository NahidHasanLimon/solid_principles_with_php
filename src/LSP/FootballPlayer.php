<?php

namespace LSP;

class FootballPlayer extends Player
{
    public $position;

    // No need to call parent::__construct() since Player constructor is simple
    public function __construct($name, $age, $position)
    {
        parent::__construct($name, $age);
        $this->position = $position;
    }

    public function train()
    {
        echo "{$this->name} ({$this->position}) is training on the football ground!\n";
    }
}