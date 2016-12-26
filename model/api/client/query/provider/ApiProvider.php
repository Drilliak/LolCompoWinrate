<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 25/12/2016
 * Time: 20:42
 */
interface ApiProvider
{
    /**
     * Crée
     *
     * @param string $methodName
     *                  le nom de la méthode
     * @param string $applicationKey
     *                  la clé de l'application
     * @param string $region
     *                  la région
     * @return ApiUrlBuilder the api url builder
     */
    public function createApiUrlBuilder(string $methodName,
                                        string $applicationKey,
                                        string $region) : ApiUrlBuilder;

}