<?php
/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 15:25
 */
abstract class RiotApiGateway{
    private $apiProvider;
    protected $applicationKey;
    protected $region;
    protected $requestHeader;


    /**
     * Gets the api provider.
     *
     * @return ApiProvider
     *             the api provider
     */
    public function getApiProvider() : ApiProvider
    {
        $this->apiProvider = new RiotApiProvider();
        return $this->apiProvider;
    }

    /**
     * Sets the api provider.
     * @param ApiProvider $apiProvider
     *                      the new api provider
     */
    public function setApiProvider(ApiProvider $apiProvider) : void
    {
        $this->apiProvider = $apiProvider;
    }

    /**
     * Gets the application key.
     * @return string
     *              the application key
     */
    public function getApplicationKey() : string
    {
        return $this->applicationKey;
    }

    /**
     * Sets the application key.
     * @param string $applicationKey
     *                  the new application key
     */
    public function setApplicationKey(string $applicationKey) : void
    {
        $this->applicationKey = $applicationKey;
    }

    /**
     * Gets the region.
     * @return string
     *             the region.
     */
    public function getRegion() : string
    {
        return $this->region;
    }

    /**
     * Sets the region.
     * @param string $region
     *                  the new region.
     */
    public function setRegion(string $region) : void
    {
        $this->region = $region;
    }

    /**
     * Gets the request headers.
     * @return array
     *          the request headers
     */
    public function getRequestHeaders() : array{
        return $this->requestHeader;
    }

    public function setRequestHeaders(array $requestHeader) : void{
        $this->requestHeader = $requestHeader;
    }




}