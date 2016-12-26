<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 15:21
 */
interface RiotAuthenticationClient extends RiotCommunicationClient
{
    /**
     * Sets the application key.
     *
     * @param string $applicationKey
     *                  the new application key
     */
    public function setApplicationKey(string $applicationKey) : void;

    /**
     * Gets the application key.
     * @return string
     *          the application key.
     */
    public function getApplicationKey() : string;

    /**
     * Sets the region.
     * @param string $region
     *                  the new region.
     */
    public function setRegion(string $region) : void;

    /**
     * Gets the region.
     * @return string
     *             the region.
     */
    public function getRegion() : string;
}