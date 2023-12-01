<?php

namespace LSP;
class Player
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function train()
    {
        echo "{$this->name} is training on the ground!\n";
    }
}