<?php
require_once "./autoloader/DirectoriesAutoloader.php";
$autoloader = DirectoriesAutoloader::instance("./autoloader/cache")->addDirectory("model")->addDirectory("controller");
spl_autoload_register(array($autoloader, "autoload"));




$factory = RiotApiQueryFactory::newInstance("308fdabd-0365-4103-b5ec-e8e965db5515", "euw");

$summoner = $factory->newSummonerApiQuery()->withSummonerName("Alderiate")->summonersList();

$summonerId = $summoner[0]->getId();

$games = $factory->newGameApiQuery()->withSummonerId($summonerId)->listRecentGames();

$dbFactory = DbFactory::newInstance("localhost", "league_of_legends", "root", "");

$compoManager = $dbFactory->newCompoOccurencesManager();

foreach ($games as $game){
    $gameId = $game->getGameId();
    $match = $factory->newMatchApiQuery()->withMatchId($gameId)->getMatch();
    $winnerTeam = $match->getTeams()[0]->getTeamId();
    if (!$match->getTeams()[0]->getWinner()){
        $winnerTeam = $match->getTeams()[1]->getTeamId();
    }
    $participants = $match->getParticipants();
    $winCompo= array();
    $looseCompo = array();
    foreach ($participants as $participant){
        $teamId = $participant->getTeamId();
        $lane = $participant->getTimeline()->getLane();
        $role = $participant->getTimeline()->getRole();
        if($lane == "BOTTOM" && $role == "DUO_CARRY" ){
            if ($teamId == $winnerTeam){
                $winCompo["adc"] = $participant->getChampionId();
            }
            else{
                $looseCompo["adc"] = $participant->getChampionId();
            }
        }
        if ($lane == "BOTTOM" && $role == "DUO_SUPPORT"){
            if ($teamId == $winnerTeam){
                $winCompo["support"] = $participant->getChampionId();
            } else{
                $looseCompo["support"] = $participant->getChampionId();
            }

        }
    }
    if (!empty($winCompo) && !empty($looseCompo)){
        $compoManager->addCompo($winCompo, true);
        $compoManager->addCompo($looseCompo, false);
    }


}

echo 'test';



