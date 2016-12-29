<?php
error_reporting(E_ALL ^ E_WARNING);
/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 19:51
 */
class GameApiQueryImpl extends BaseRiotApiQuery implements GameApiQuery
{

    /**
     * Instanciates a new game api query impl.
     *
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
     * @see GameApiQuery::withSummonerId()
     */
    public function withSummonerId(int $summonerId) : GameApiQuery{
        $this->apiUrlBuilder->withId($summonerId);
        return $this;
    }

    /**
     * @see GameApiQuery::listRecentGames()
     */
    public function listRecentGames() : array{
        $this->apiUrlBuilder->withMethod(RiotApiMethods::GET_RECENT_GAMES);
        $jsonContent = json_decode(file_get_contents($this->apiUrlBuilder->buildUrl()));
        $recentGames = array();

        foreach($jsonContent->{"games"} as $game){
            array_push($recentGames, JsonParser::fromJson($game, "GameDto"));
        }


        return $recentGames;
    }

    public function reset()
    {
        $this->apiUrlBuilder = $this->getApiProvider()->createApiUrlBuilder(RiotApiMethods::GET_RECENT_GAMES,
            $this->getApplicationKey(),
            $this->getRegion());
    }
}