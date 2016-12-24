<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 24/12/2016
 * Time: 13:16
 */
class GameUrlBuilder extends UrlBuilder
{

    public function __construct()
    {
        parent::__construct();
        $this->version = "v1.3";
        $this->baseUrl = "/api/lol/";
    }

    public function getRecentGamesUrl($summonerId){
        return "https://" . $this->region. ".api.pvp.net" . $this->baseUrl . $this->region . "/" .
            $this->version . "/game/by-summoner/" . $summonerId . "/recent?api_key=" . $this->apiKey;
    }
}