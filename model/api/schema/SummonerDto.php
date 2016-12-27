<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 27/12/2016
 * Time: 02:13
 */
class SummonerDto extends Schema
{
    /** @var  int Summoner ID. */
    private $id;

    /** @var  string Summoner name. */
    private $name;

    /** @var  int ID of the summoner icon associated with the summoner. */
    private $profileIconId;

    /** @var  float Date summoner was last modified specified as epoch milliseconds. The following events will update
     * this timestamp: profile icon change, playing the tutorial or advanced tutorial, finishing a game,
     * summoner name change */
    private $revisionDate;

    /** @var float Summoner level associated with the summoner. */
    private $summonerLevel;

    /**
     * SummonerDto constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id)
    {
        $this->id = $id;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getProfileIconId(): int
    {
        return $this->profileIconId;
    }


    public function setProfileIconId(int $profileIconId)
    {
        $this->profileIconId = $profileIconId;
    }


    public function getRevisionDate(): float
    {
        return $this->revisionDate;
    }


    public function setRevisionDate(float $revisionDate)
    {
        $this->revisionDate = $revisionDate;
    }


    public function getSummonerLevel(): float
    {
        return $this->summonerLevel;
    }


    public function setSummonerLevel(float $summonerLevel)
    {
        $this->summonerLevel = $summonerLevel;
    }




}