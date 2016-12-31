<?php

/**
 *  This object contains all timeline information
 */
class ParticipantTimeline extends Schema
{

    /** Participant's lane : legal values */
    const PARTICIPANT_LANE_VALUES = array("MID", "MIDDLE", "TOP", "JUNGLE", "BOT", "BOTTOM");

    /** Participant's role : legal values */
    const PARTICIPANT_ROLE_VALUES = array("DUO", "NONE", "SOLO", "DUO_CARRY", "DUO_SUPPORT");

    /** @var  string Participant's lane */
    private $lane;

    /** @var  string Participant's role */
    private $role;


    /**
     * ParticipantTimeline constructor.
     * @param array $data
     *                  participant timeline data.
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }


    public function getLane(): string
    {
        return $this->lane;
    }

    public function setLane(string $lane)
    {
        if (in_array($lane, self::PARTICIPANT_LANE_VALUES)) {
            $this->lane = $lane;
        }

    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role)
    {
        if (in_array($role, self::PARTICIPANT_ROLE_VALUES)){
            $this->role = $role;
        }

    }


}