<?php

/**
 * This object contains participant identity information
 */
class ParticipantIdentity extends Schema
{
    const VAR_TYPE = array(
        "player" => "Player"
    );

    /** @var  int Participant ID */
    private $participantId;

    /** @var  Player information */
    private $player;

    /**
     * ParticipantIdentity constructor.
     * @param array $data
     *                 participant identity data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    /**
     * @return int
     */
    public function getParticipantId(): int
    {
        return $this->participantId;
    }

    /**
     * @param int $participantId
     */
    public function setParticipantId(int $participantId)
    {
        $this->participantId = $participantId;
    }

    /**
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @param Player $player
     */
    public function setPlayer(Player $player)
    {
        $this->player = $player;
    }


}