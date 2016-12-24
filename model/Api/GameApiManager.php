<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 24/12/2016
 * Time: 13:15
 */
class GameApiManager extends ApiManager
{

    private $summonerId;

    public function __construct($summonerId)
    {
        $this->builder = new GameUrlBuilder();
        $this->summonerId = $summonerId;
    }

    /**
     * Renvoie tous les joueurs ayant participé aux parties récentes de l'invocateur
     * identifié par l'id contenu dans la classe.
     * @return un tableau contenant les id des invocateurs.
     */
    public function getParticipants(){

        if (is_null($this->content)){
            $url = $this->builder->getRecentGamesUrl($this->summonerId);
            $this->loadContent($url);
        }
        $summonersIds = array();
        foreach ($this->content->{"games"} as $game){
           $fellowPlayers = $game->{'fellowPlayers'};
           foreach($fellowPlayers as $player){
               $summonerId = $player->{"summonerId"};
               if (!in_array($summonerId, $summonersIds)){
                   array_push($summonersIds, $summonerId);
               }
           }
        }
        return $summonersIds;
    }

    public function getMatchIds(){
        if (is_null($this->content)){
            $url = $this->builder->getRecentGamesUrl($this->summonerId);
            $this->loadContent($url);
        }
        $gamesIds = array();
        foreach ($this->content->{"games"} as $game){
            array_push($gamesIds, $game->{'gameId'});
        }
        return $gamesIds;
    }
}