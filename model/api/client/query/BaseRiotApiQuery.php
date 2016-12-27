<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 15:45
 */
abstract class BaseRiotApiQuery extends RiotApiGateway implements RiotApiQuery
{
    protected $apiUrlBuilder;

    /**
     * Instantiates a new base riot api query.
     *
     * @param string $applicationKey
     *                  the application key
     * @param string $region
     *                  the region
     */
    public function __construct(string $applicationKey, string $region){
        $this->applicationKey = $applicationKey;
        $this->region = $region;
        $this->reset();
    }

    public function setApiProvider(ApiProvider $apiProvider): void
    {
        parent::setApiProvider($apiProvider);
        $this->reset();
    }


    public function singleResult()
    {
        // TODO: Implement singleResult() method.
    }


}