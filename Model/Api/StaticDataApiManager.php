<?php

require_once "ApiManager.php";
require_once "StaticDataUrlBuilder.php";
require_once "../Champion.php";

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 24/12/2016
 * Time: 01:57
 */
class StaticDataApiManager extends ApiManager
{

    public function __construct()
    {
        $this->builder = new StaticDataUrlBuilder();
    }

    /**
     * Récupère les id de tous les champions.
     * @return un tableau de Champion.
     */
    public function getChampionsId()
    {
        $url = $this->builder->getChampionUrl();
        $this->loadContent($url);
        $json = json_decode($this->content)->{'data'};

        $championTab = array();
        foreach ($json as $champion) {
            $id = $champion->{'id'};
            $name = $champion->{'name'};
            $data = array("id" => $id,
                "name" => $name);
            array_push($championTab, new Champion($data));
        }
        return $championTab;
    }


}
