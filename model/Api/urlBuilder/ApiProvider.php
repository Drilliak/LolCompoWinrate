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
     * Creates the api url builder.
     *
     * @param string $methodName
     *                  the method name
     * @param string $applicationKey
     *                  the application key
     * @return ApiUrlBuilder the api url builder
     */
    public function createApiUrlBuilder(string $methodName,
                                        string $applicationKey) : ApiUrlBuilder;

}