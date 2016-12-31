<?php

/**
 * This object contains team information
 */
class Team extends Schema
{

    /** @var  int Team ID */
    private $teamId;

    /** @var bool Flag indicating whether or not the team won */
    private $winner;

    /**
     * Team constructor.
     * @param array $data
     *                  data team
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    /**
     * @return int
     */
    public function getTeamId(): int
    {
        return $this->teamId;
    }

    /**
     * @param int $teamId
     */
    public function setTeamId(int $teamId)
    {
        $this->teamId = $teamId;
    }

    /**
     * @return bool
     */
    public function getWinner(): bool
    {
        return $this->winner;
    }

    /**
     * @param bool $winner
     */
    public function setWinner(bool $winner)
    {
        $this->winner = $winner;
    }


}