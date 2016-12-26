<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 24/12/2016
 * Time: 14:32
 */
class SummonerApiManager extends ApiManager
{
    public function __construct()
    {
        $this->builder = new SummonerUrlBuilder();
    }

    /**
     * @param array $summonersIds
     * @return mixed
     */
    public function getSummonerName(array $summonersIds)
    {
        $players = array();
        $multiArray = array_chunk($summonersIds, 40);
        foreach ($multiArray as $array) {
            $url = $this->builder->getSummonerByIdUrl($array);
            $this->loadContent($url);
            foreach ($this->content as $player) {
                $id = $player->{"id"};
                $name = $player->{"name"};
                $players[$id] = $name;
            }
        }

        return $players;

    }
}