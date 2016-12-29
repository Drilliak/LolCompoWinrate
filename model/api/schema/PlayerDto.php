<?php

/**
 * This object contains player information.
 */
class PlayerDto extends Schema
{
    /**
     * @var int Champion id associated with player.
     */
    private $championId;

    /**
     * @var float Summoner id associated with player.
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


    public function getSummonerId(): float
    {
        return $this->summonerId;
    }


    public function setSummonerId(float $summonerId)
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