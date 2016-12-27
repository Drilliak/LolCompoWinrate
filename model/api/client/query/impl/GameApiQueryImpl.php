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
        if (!is_null($jsonContent)){
            $jsonContent = $jsonContent->{"games"};
            foreach($jsonContent as $games){
                $game = array();
                foreach($games as $name => $value){
                    if ($name == "fellowPlayers"){
                        $fellowPlayers = array();

                        foreach($games->{$name} as $summonerDatas){
                            $datas = array();
                            foreach($summonerDatas as $dataName => $dataValue){
                               $datas[$dataName] = $dataValue;
                            }
                            array_push($fellowPlayers, new PlayerDto($datas));
                        }
                        $game[$name] =  $fellowPlayers;
                    } else{
                        $game[$name] = $value;
                    }

                }
                array_push($recentGames, new GameDto($game));
            }
        }
        else{
            die("No data available");
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