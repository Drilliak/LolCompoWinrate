<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 27/12/2016
 * Time: 12:00
 */
class SummonerApiQueryImpl extends BaseRiotApiQuery implements SummonerApiQuery
{

    /**
     * Instantiates a new Summoner api query impl
     * @param string $applicationKey
     *                  the application key
     * @param string $region
     *                  the region
     */
    public function __construct($applicationKey, $region)
    {
        parent::__construct($applicationKey, $region);
    }

    /**
     * @see SummonerApiQuery::withSummonerNames()
     */
    public function withSummonerNames(array $summonerNames): SummonerApiQuery
    {
        $this->apiUrlBuilder->withFields("names", $summonerNames);
        return $this;
    }

    /**
     * @see SummonerApiQuery::withSummonerName()
     */
    public function withSummonerName(string $summonerName): SummonerApiQuery
    {
        $this->apiUrlBuilder->withField("names", $summonerName);
        return $this;
    }


    /**
     * @see SummonerApiQuery::summonersList()
     */
    public function summonersList(): array
    {
        RiotApiQueryFactory::wait();
        $this->apiUrlBuilder->withMethod(RiotApiMethods::GET_SUMMONER_BY_NAME);
        $url = $this->apiUrlBuilder->buildUrl();


        $jsonContent = json_decode(file_get_contents($url));

        $summonersList = array();

        foreach ($jsonContent as $summoner) {
            array_push($summonersList, JsonParser::fromJson($summoner, "SummonerDto"));
        }

        return $summonersList;
    }


    /**
     * @see RiotApiQuery::reset()
     */
    public function reset()
    {
        $this->apiUrlBuilder = $this->getApiProvider()->createApiUrlBuilder(RiotApiMethods::GET_SUMMONER_BY_NAME,
            $this->getApplicationKey(),
            $this->getRegion());
    }
}