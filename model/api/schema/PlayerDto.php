<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 21:58
 */
class PlayerDto extends Schema
{
    /**
     * @var int Champion id associated with player.
     */
    private $championId;

    /**
     * @var int Summoner id associated with player.
     */
    private $summonerId;

    /**
     * @var int Team id associated with player.
     */
    private $teamId;

    /**
     * PlayerDto constructor.
     * @param array $data
     *                  PlayerDto data.
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }


    public function getChampionId(): int
    {
        return $this->championId;
    }


    public function setChampionId(int $championId)
    {
        $this->championId = $championId;
    }


    public function getSummonerId(): int
    {
        return $this->summonerId;
    }


    public function setSummonerId(int $summonerId)
    {
        $this->summonerId = $summonerId;
    }


    public function getTeamId(): int
    {
        return $this->teamId;
    }


    public function setTeamId(int $teamId)
    {
        $this->teamId = $teamId;
    }


}