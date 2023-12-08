<?php

namespace DIP;
class FootballTeam
{
    public function __construct()
    {
        echo "Hello from FootballTeam constructor";
    }

    public function build()
    {
        return [
            'defender' => 3,
            'mid' => 4,
            'forward' => 3,
            'goal_keeper' => 1
        ];

    }
}