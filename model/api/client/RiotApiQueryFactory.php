<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 16:00
 */
class RiotApiQueryFactory
{
    /**
     * @var string
     *          Clé de l'application.
     */
    private $applicationKey;
    /**
     * @var string
     *          Région.
     */
    private $region;

    /**
     * RiotApiQueryFactory constructor.
     * @param string $applicationKey
     *                  clé de l'application.
     * @param string $region
     *                  région.
     */
    private function __construct(string $applicationKey, string $region)
    {
        $this->applicationKey = $applicationKey;
        $this->region = $region;
    }

    /**
     * Nouvelle instance
     *
     * @param string $applicationKey
     *                  clé de l'application
     * @param string $region
     *                  région
     * @return RiotApiQueryFactory
     *              nouvel objet riot api query factory.
     */
    static public function newInstance(string $applicationKey, string $region) : RiotApiQueryFactory{
        return new RiotApiQueryFactory($applicationKey, $region);
    }

    public function newStaticDataApiQuery() : StaticDataApiQuery{
        return new StaticDataApiQueryImpl($this->applicationKey, $this->region);
    }



}