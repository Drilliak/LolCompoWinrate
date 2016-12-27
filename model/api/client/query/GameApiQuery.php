<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 19:50
 */
interface GameApiQuery extends RiotApiQuery
{
    /**
     * With summoner id.
     * @param int $summonerId
     *              the summoner id
     * @return GameApiQuery
     *          the game api query.
     */
    public function withSummonerId(int $summonerId) : GameApiQuery;
    /**
     * Retourne la liste des games récentes.
     *
     * @return array
     */
    public function listRecentGames() : array;
}