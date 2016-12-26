<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 16:08
 */
class StaticDataApiQueryImpl extends BaseRiotApiQuery implements StaticDataApiQuery
{
    /**
     * Instanciates a new static data api query impl.
     * @param string $applicationKey
     *                  the application key.
     * @param string $region
     *                  the region.
     */
    public function __construct(string $applicationKey, string $region)
    {
        parent::__construct($applicationKey, $region);
    }

    /**
     * @see StaticDataApiQuery::withLocale()
     */
    public function withLocale(string $locale): StaticDataApiQuery
    {
        $this->apiUrlBuilder->withParameter("locale", $locale);
        return $this;
    }

    /**
     * @see StaticDataApiQuery::withVersion()
     */
    public function withVersion(string $version) : StaticDataApiQuery
    {
        $this->apiUrlBuilder->withParameter("version", $version);
        return $this;
    }

    /**
     * @see StaticDataApiQuery::withDataById()
     */
    public function withDataById() : StaticDataApiQuery{
        $this->apiUrlBuilder->withParameter("dataById", "true");
        return $this;
    }

    /**
     * @see StaticDataApiQuery::withoutDataById()
     */
    public function withoutDataById() : StaticDataApiQuery{
        $this->apiUrlBuilder->withParameter("dataById", "false");
        return $this;
    }

    /**
     * @see StaticDataApiQuery::withChampData()
     */
    public function withChampData(string $tag) : StaticDataApiQuery{
        $supportedTags = array("all", "allytips", "altimages", "blurb", "enemytips", "image", "info", "lore",
            "partype", "passive", "recommended", "skins", "spells", "stats", "tags");
        if (in_array($tag, $supportedTags)){
            $this->apiUrlBuilder->withParameter("champData", $tag);
        }
        return $this;
    }

    /**
     * @see RiotApiQuery::reset()
     */
    public function reset()
    {
        $this->apiUrlBuilder = $this->getApiProvider()->createApiUrlBuilder(RiotApiMethods::GET_CHAMPIONS,
            $this->getApplicationKey(),
            $this->getRegion());

    }

    /**
     * @see StaticDataApiQuery::listChampions()
     */
    public function listChampions(): array
    {
        $this->apiUrlBuilder->withMethod(RiotApiMethods::GET_CHAMPIONS);
        echo $this->apiUrlBuilder->buildUrl();
        $jsonContent = json_decode(file_get_contents($this->apiUrlBuilder->buildUrl()));
        $jsonContent = $jsonContent->{"data"};
        $championsList = array();
        foreach ($jsonContent as $champion) {
            $datas = array();
            foreach ($champion as $key => $data) {
                $datas[$key] = $data;
            }
            array_push($championsList, new ChampionDto($datas));
        }

        return $championsList;
    }
}