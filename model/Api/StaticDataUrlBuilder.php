<?php

/**
 * User: Vincent
 * Date: 24/12/2016
 * Time: 01:58
 */
class StaticDataUrlBuilder extends UrlBuilder
{
    public function __construct()
    {
        parent::__construct();
        $this->version = "v1.2";
        $this->baseUrl = "/api/lol/static-data/";
    }

    /**
     * Construit l'url permettant de récupérer les données sur les champions.
     * @return string url
     */
    public function getChampionUrl(){
        return "https://global.api.pvp.net" . $this->baseUrl . $this->region . "/" . $this->version .
            "/champion?api_key=" . $this->apiKey;
    }

}