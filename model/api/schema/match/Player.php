<?php

/**
 * This object contains match player information
 */
class Player extends Schema
{
    /** @var  string 	Match history URI*/
    private $matchHistoryUri;

    /** @var  int Profile icon ID*/
    private $profileIcon;

    /** @var  float Summoner ID */
    private $summonerId;

    /** @var  string Summoner name */
    private $summonerName;

    /**
     * Player constructor.
     * @param array $data
     *                  player data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getMatchHistoryUri(): string
    {
        return $this->matchHistoryUri;
    }

    /**
     * @param string $matchHistoryUri
     */
    public function setMatchHistoryUri(string $matchHistoryUri)
    {
        $this->matchHistoryUri = $matchHistoryUri;
    }

    /**
     * @return int
     */
    public function getProfileIcon(): int
    {
        return $this->profileIcon;
    }

    /**
     * @param int $profileIcon
     */
    public function setProfileIcon(int $profileIcon)
    {
        $this->profileIcon = $profileIcon;
    }

    /**
     * @return float
     */
    public function getSummonerId(): float
    {
        return $this->summonerId;
    }

    /**
     * @param float $summonerId
     */
    public function setSummonerId(float $summonerId)
    {
        $this->summonerId = $summonerId;
    }

    /**
     * @return string
     */
    public function getSummonerName(): string
    {
        return $this->summonerName;
    }

    /**
     * @param string $summonerName
     */
    public function setSummonerName(string $summonerName)
    {
        $this->summonerName = $summonerName;
    }


}