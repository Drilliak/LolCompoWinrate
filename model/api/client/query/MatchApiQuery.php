<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 28/12/2016
 * Time: 01:32
 */
interface MatchApiQuery extends  RiotApiQuery
{

    /**
     * With the match id.
     *
     * @param float $matchId
     *                  the match id.
     * @return MatchApiQuery
     *          the match api query.
     */
    public function withMatchId(float $matchId) : MatchApiQuery;

    /**
     * Returns the match.
     *
     * @return MatchDetail
     *          the match detail
     */
    public function getMatch() : MatchDetail;
}