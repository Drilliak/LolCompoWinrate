<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 28/12/2016
 * Time: 01:41
 */

class MatchApiQueryImpl extends BaseRiotApiQuery implements MatchApiQuery
{

    /**
     * @see MatchApiQuery::withMatchId()
     */
    public function withMatchId(float $matchId): MatchApiQuery
    {
        $this->apiUrlBuilder->withField("matchId", $matchId);
        return $this;
    }

    /**
     * @see MatchApiQuery::getMatch()
     */
    public function getMatch(): MatchDetail
    {
        RiotApiQueryFactory::wait();
        $this->apiUrlBuilder->withMethod(RiotApiMethods::GET_MATCH);
        $jsonContent = json_decode(file_get_contents($this->apiUrlBuilder->buildUrl()));

        return JsonParser::fromJson($jsonContent, "MatchDetail");
    }

    /**
     * @see RiotApiQuery::reset()
     */
    public function reset()
    {
        $this->apiUrlBuilder = $this->getApiProvider()->createApiUrlBuilder(RiotApiMethods::GET_MATCH,
            $this->getApplicationKey(),
            $this->getRegion());
    }
}