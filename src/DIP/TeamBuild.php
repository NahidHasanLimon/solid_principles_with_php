<?php

namespace DIP;
class TeamBuild implements  ITeamBuild
{
    private  $team;
//    private   $ITeamBuild;
    public function __construct(ITeamBuild $team)
    {
        echo "Hello from team build constructor";
        $this->team = $team;
    }
    public function build()
    {
        return $this->team->build();
    }

}