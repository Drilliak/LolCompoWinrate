<?php


abstract class UrlBuilder
{

    protected $region;

    protected $apiKey;

    protected $version;
    protected $baseUrl;

    protected function __construct()
    {
        $this->region = REGION::EUW;
        $this->apiKey = "308fdabd-0365-4103-b5ec-e8e965db5515";

    }


}
