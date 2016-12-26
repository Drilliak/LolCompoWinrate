<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 15:15
*/
interface RiotCommunicationClient
{
    /**
     * Sets the request headers
     *
     * @param array $requestHeaders
     *                  the request headers
     */
    public function setRequestHeaders(array $requestHeaders) : void;

    /**
     * Gets the request headers
     *
     * @return array the request headers
     */
    public function getRequestHeaders() : array;

    /**
     * Sets the api provider.
     *
     * @param ApiProvider $apiProvider
     */
    public function setApiProvider(ApiProvider $apiProvider) : void;

    /**
     * Gets the api provider.
     *
     * @return ApiProvider the api provider
     */
    public function getApiProvider() : ApiProvider;



}