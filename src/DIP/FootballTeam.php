<?php

namespace DIP;
class FootballTeam implements ITeamBuild
{

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