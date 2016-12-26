<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 16:07
 */
interface StaticDataApiQuery extends RiotApiQuery
{

    /**
     * With locale
     *
     * @param string $locale
     *                  the locale.
     * @return StaticDataApiQuery
     *          the static data api query.
     */
    public function withLocale(string $locale) : StaticDataApiQuery;

    /**
     * With data dragon version.
     * @param string $version
     *                  the data dragon version.
     * @return StaticDataApiQuery
     *          the static data api query.
     */
    public function withVersion(string $version) : StaticDataApiQuery;

    /**
     * The returned data array will use the champion's Id as the key.
     * @return StaticDataApiQuery
     *              the static data api query.
     */
    public function withDataById() : StaticDataApiQuery;

    /**
     * The returned data array won't use the champion's id as the key.
     * @return StaticDataApiQuery
     *              the static data api query.
     */
    public function withoutDataById() : StaticDataApiQuery;


    /**
     * Tags to return additionnal data.
     * Supported tags : all, allytips, altimages, blurb, enemytips, image, info, lore,
     * partype, passive, recommended, skins, spells, stats, tags.
     *
     * @return StaticDataApiQuery
     *          the static data api query.
     */
    public function withChampData(string $tag) : StaticDataApiQuery;
    /**
     * Retourne la liste des champions du jeu.
     *
     * Paramètres supportés : -locale, -version, -dataById, champData
     * @return array
     */
    public function listChampions() : array;
}