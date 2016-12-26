<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 25/12/2016
 * Time: 19:42
 */
class RiotApiProvider implements ApiProvider
{
    /**
     * @see ApiProvider::createApiUrlBuilder()
     */
    public function createApiUrlBuilder(string $methodName,
                                        string $applicationKey) : ApiUrlBuilder
    {
        return new DefaultApiUrlBuilder($methodName, $applicationKey);
    }

}