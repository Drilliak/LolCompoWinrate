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
     * Avec le paramètre champData
     *
     * @param string $tag
     *                  tags acceptés :
     *                  <ul>
     *                      <li>all</li>
     *                      <li>allytips</li>
     *                      <li>alltimages</li>
     *                      <li>blurb</li>
     *                      <li>enemytips</li>
     *                      <li>image</li>
     *                      <li>info</li>
     *                      <li>lore</li>
     *                      <li>partype</li>
     *                      <li>passive</li>
     *                      <li>recommended</li>
     *                      <li>skins</li>
     *                      <li>spells</li>
     *                      <li>stats</li>
     *                      <li>tags</li>
     *                  </ul>
     * @return ApiUrlBuilder
     *              l'objet permettant de construire l'url.
     */
    public function withChampData(string $tag) : ApiUrlBuilder;

    /**
     * Trie le tableau de retour en utilisant les id comme index.
     * @return ApiUrlBuilde
     *              l'objet permettant de construire l'url.
     */
    public function withDataById() : ApiUrlBuilder;

    /**
     * N'utilise pas les id comme index dans le tableau de retourn.
     * @return ApiUrlBuilder
     *              l'objet permettant de construire l'url.
     */
    public function withoutDataById(): ApiUrlBuilder;

    /**
     * Avec la version de données
     *
     * @param string $version
     *                  la data dragon version
     *
     * @return ApiUrlBuilder
     *              l'objet permettant de construire l'url.
     */
    public function withVersion(string $version) : ApiUrlBuilder;

    /**
     * Avec le lieu des données
     *
     * @param string $locale
     *                  le lieu des données
     * @return ApiUrlBuilder
     *              l'objet permettant de construire l'url.
     */
    public function withLocale(string $locale) : ApiUrlBuilder;

    /**
     * Builds the url
     *
     * @return string
     *             the url
     */
    public function buildUrl() : string;
}