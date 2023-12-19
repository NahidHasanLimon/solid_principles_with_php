<?php

namespace DIP;
class CricketTeam implements ITeamBuild
{

    public function build()
    {
        return [
            'batsmen' => 3,
            'bowler' => 4,
            'all_rounder' => 3,
            'wicket_keeper' => 1
        ];

    }
}