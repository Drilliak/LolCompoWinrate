<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 28/12/2016
 * Time: 01:37
 */
class MatchDetail extends Schema
{
    /** @var  int Match map ID*/
    private $mapId;

    /** @var  float Match creation time. Designates when the team select lobby is
     * created and/or the match is made through match making, not when the game actually starts.*/
    private $matchCreation;

    /** @var  float  Match duration */
    private $matchDuration;

    /** @var float ID of the match */
    private $matchId;

    /** @var  string Match mode */
    private $matchMode;

    /** @var  string Match type */
    private $matchType;

    /** @var  array Participant identity information*/
    private $participantIdentities;

    /** @var  array Participant information */
    private $participants;

    /** @var  string Platform ID of the match    */
    private $platformId;

    /** @var  string Match queue type */
    private $queueType;

    /** @var  string Region where the match was played */
    private $region;

    /** @var  string Season match was played */
    private $season;

    /** @var  array Team information */
    private $teams;

    /** @var  Timeline Match timeline data */
    private $timeline;

    public function __construct(array $data)
    {
        parent::__construct($data);
    }


    public function getMapId(): int
    {
        return $this->mapId;
    }


    public function setMapId(int $mapId)
    {
        $this->mapId = $mapId;
    }


    public function getMatchCreation(): float
    {
        return $this->matchCreation;
    }


    public function setMatchCreation(float $matchCreation)
    {
        $this->matchCreation = $matchCreation;
    }


    public function getMatchDuration(): float
    {
        return $this->matchDuration;
    }

    public function setMatchDuration(float $matchDuration)
    {
        $this->matchDuration = $matchDuration;
    }

    public function getMatchId(): float
    {
        return $this->matchId;
    }

    public function setMatchId(float $matchId)
    {
        $this->matchId = $matchId;
    }

    public function getMatchMode(): string
    {
        return $this->matchMode;
    }

    public function setMatchMode(string $matchMode)
    {
        if (GameMode::isValidName($matchMode)){
            $this->matchMode = $matchMode;
        }

    }

    public function getMatchType(): string
    {
        return $this->matchType;
    }

    public function setMatchType(string $matchType)
    {
        if (GameType::isValidName($matchType)){
            $this->matchType = $matchType;
        }

    }

    public function getParticipantIdentities(): array
    {
        return $this->participantIdentities;
    }

    public function setParticipantIdentities(array $participantIdentities)
    {
        $this->participantIdentities = $participantIdentities;
    }

    public function getParticipants(): array
    {
        return $this->participants;
    }

    public function setParticipants(array $participants)
    {
        $this->participants = $participants;
    }

    public function getPlatformId(): string
    {
        return $this->platformId;
    }

    public function setPlatformId(string $platformId)
    {
        $this->platformId = $platformId;
    }

    public function getQueueType(): string
    {
        return $this->queueType;
    }

    public function setQueueType(string $queueType)
    {
        $this->queueType = $queueType;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region)
    {
        $this->region = $region;
    }

    public function getSeason(): string
    {
        return $this->season;
    }

    public function setSeason(string $season)
    {
        $this->season = $season;
    }

    public function getTeams(): array
    {
        return $this->teams;
    }

    public function setTeams(array $teams)
    {
        $this->teams = $teams;
    }

    public function getTimeline(): Timeline
    {
        return $this->timeline;
    }

    public function setTimeline(Timeline $timeline)
    {
        $this->timeline = $timeline;
    }




}