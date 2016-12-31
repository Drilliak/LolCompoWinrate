<?php

/**
 * This object contains match participant information
 */
class Participant extends Schema
{
    const VAR_TYPE = array(
        "masteries" => "arrayMastery",
        "runes" => "arrayRune",
        "stats" => "ParticipantStats",
        "timeline" =>"ParticipantTimeline"
    );
    /** @var  int Champion ID */
    private $championId;

    /** @var  string Highest ranked tier achieved for the previous season, if any, otherwise null */
    private $highestAchievedSeasonTier;

    /** @var  array List of mastery information */
    private $masteries;

    /** @var  int Participant ID */
    private $participantId;

    /** @var  array List of rune information */
    private $runes;

    /** @var  int 	First summoner spell ID */
    private $spell1Id;

    /** @var  int Second dummoner spell Id */
    private $spell2Id;

    /** @var  ParticipantStats Participant statistics */
    private $stats;

    /** @var  int  Team ID*/
    private $teamId;

    /** @var  ParticipantTimeline Timeline data. Delta fields refer to values for the specified
     * period (e.g., the gold per minute over the first 10 minutes of the game versus the second
     * 20 minutes of the game. Diffs fields refer to the deltas versus the calculated lane opponent(s).*/
    private $timeline;

    /**
     * Participant constructor.
     * @param array $data
     *               participant data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }


    public function getChampionId(): int
    {
        return $this->championId;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function setTeamId(int $teamId)
    {
        $this->teamId = $teamId;
    }

    public function setChampionId(int $championId)
    {
        $this->championId = $championId;
    }

    public function getHighestAchievedSeasonTier(): string
    {
        return $this->highestAchievedSeasonTier;
    }

    public function setHighestAchievedSeasonTier(string $highestAchievedSeasonTier)
    {
        $this->highestAchievedSeasonTier = $highestAchievedSeasonTier;
    }

    public function getMasteries(): array
    {
        return $this->masteries;
    }

    public function setMasteries(array $masteries)
    {
        $this->masteries = $masteries;
    }

    public function getParticipantId(): int
    {
        return $this->participantId;
    }

    public function setParticipantId(int $participantId)
    {
        $this->participantId = $participantId;
    }

    public function getRunes(): array
    {
        return $this->runes;
    }

    public function setRunes(array $runes)
    {
        $this->runes = $runes;
    }

    public function getSpell1Id(): int
    {
        return $this->spell1Id;
    }

    public function setSpell1Id(int $spell1Id)
    {
        $this->spell1Id = $spell1Id;
    }

    public function getSpell2Id(): int
    {
        return $this->spell2Id;
    }

    public function setSpell2Id(int $spell2Id)
    {
        $this->spell2Id = $spell2Id;
    }

    public function getStats(): ParticipantStats
    {
        return $this->stats;
    }

    public function setStats(ParticipantStats $stats)
    {
        $this->stats = $stats;
    }

    public function getTimeline(): ParticipantTimeline
    {
        return $this->timeline;
    }

    public function setTimeline(ParticipantTimeline $timeline)
    {
        $this->timeline = $timeline;
    }





}