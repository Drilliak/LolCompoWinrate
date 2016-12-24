<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 24/12/2016
 * Time: 14:24
 */
class SummonerUrlBuilder extends UrlBuilder
{

    const TOO_MANY_SUMMONERS_IDS = 1;
    public function __construct()
    {
        parent::__construct();
        $this->version = "v1.4";
        $this->baseUrl = "/api/lol/";
    }

    /**
     * Renvoie l'url permettant de récupérer le nom d'un invocateur en fonction de son id.
     * @param array $summonerId tableau des ids des invocateurs. Le tableau doit être de
     * taille inférieur ou égal à 40 (limitation due à l'api).
     * @return
     */
   public function getSummonerByIdUrl(array $summonersIds){
       if (count($summonersIds) <=40){
            $urlIds = "";
            foreach ($summonersIds as $summonerId){
                if ($summonerId != end($summonersIds)){
                    $urlIds .= $summonerId . ",";
                }else{
                    $urlIds .= $summonerId;
                }

            }
           return "https://euw.api.pvp.net" . $this->baseUrl . $this->region . "/" . $this->version .
               "/summoner/" . $urlIds . "?api_key=" . $this->apiKey;
       }
       return self::TOO_MANY_SUMMONERS_IDS;
   }
}