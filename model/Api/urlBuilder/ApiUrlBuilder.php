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
     * @param int $id
     *                  l'id
     * @return ApiUrlBuilder
     *          l'objet permettant de construire l'url.
     */
    public function withId(int $id) : ApiUrlBuilder;

    /**
     * @param array $ids
     *                  tableaux des ids
     * @return ApiUrlBuilder
     *          l'objet permettant de construire l'url.
     */
    public function withIds(array $ids) : ApiUrlBuilder;

    /**
     * Avec la méthode.
     * @param string $methodName
     *                  le nom de la méthode
     * @return ApiUrlBuilder
     *          l'objet permettant de construire l'url.
     */
    public function withMethod(string $methodName) : ApiUrlBuilder;

    /**
     * Avec le paramètre.
     * @param string $name
     *                  nom du paramètre.
     * @param string $value
     *                  nom de la valeur;
     * @return ApiUrlBuilder
     *          l'objet permettant de construire l'url.
     */
    public function withParameter(string $name, string $value) : ApiUrlBuilder;

    /**
     * Builds the url
     *
     * @return string
     *             the url
     */
    public function buildUrl() : string;
}