<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 27/12/2016
 * Time: 11:58
 */
interface SummonerApiQuery extends RiotApiQuery
{
    /**
     * With the summoner name.
     *
     * @param string $summonerName
     *                  the summoner name
     * @return SummonerApiQuery
     *              the summoner api query.
     */
    public function withSummonerName(string $summonerName) : SummonerApiQuery;

    /**
     * With the summoner names
     * @param array $summonerNames
     *              the summoner names
     * @return SummonerApiQuery
     *              the summoner api query
     */
    public function withSummonerNames(array $summonerNames) : SummonerApiQuery;

    /**
     * Retruves the summoner.
     * @return SummonerDto
     *              the summoner.
     *
     */
    public function getSummoner() : SummonerDto;

    /**
     * Retrieves the summoners.
     * @return array
     *          array of SummonerDto.
     */
    public function summonersList() : array;
}