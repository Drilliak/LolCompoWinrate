<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 25/12/2016
 * Time: 20:47
 */
interface ApiUrlBuilder
{
    /**
     * Avec l'id
     *
     * @param int $summonerId
     *                  l'id de l'invocateur
     * @return ApiUrlBuilder
     *          l'objet permettant de construire l'url.
     */
    public function withSummonerId(int $summonerId) : ApiUrlBuilder;

    /**
     * @param array $summonerIds
     *                  tableaux des ids des invocateurs.
     * @return ApiUrlBuilder
     *          l'objet permettant de construire l'url.
     */
    public function withSummonerIds(array $summonerIds) : ApiUrlBuilder;

    /**
     * Builds the url
     *
     * @return string
     *             the url
     */
    public function buildUrl() : string;
}