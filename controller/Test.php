<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 29/12/2016
 * Time: 21:46
 */
class Test
{
    /** @var   */
    private $startSummonerId;

    /** @var  RiotApiQueryFactory */
    private $riotApiQueryFactory;

    /** @var  DbFactory  factory */
    private $databaseFactory;

    /** Configuration file path */
    const CONFIGURATION_FILE_PATH = "properties.ini";

    public function __construct($startSummonerId)
    {
        $configuration = parse_ini_file(self::CONFIGURATION_FILE_PATH);
        $this->riotApiQueryFactory = RiotApiQueryFactory::newInstance(
            $configuration["apiKey"],
            $configuration["region"]);
        $this->databaseFactory = DbFactory::newInstance(
            $configuration["host"],
            $configuration["databaseName"],
            $configuration["user"],
            $configuration["password"]);
        $this->startSummonerId = $startSummonerId;
    }
}
