<?php

namespace DIP;
class TeamBuild
{
    private $team;
    public function __construct(CricketTeam $team)
    {
        $this->$team = $team;
        echo "Hello from team build constructor";
    }
    public function build()
    {
        $this->team->buld();
        return "from build team class";

    }

}