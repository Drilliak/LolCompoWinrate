<?php

/**
 * This object contains information about banned champions
 */
class BannedChampion extends Schema
{
    /** @var  int Banned champion ID */
    private $championId;

    /** @var  int  Turn during which the champion was banned*/
    private $pickTurn;

    /**
     * BannedChampion constructor.
     * @param array $data
     *                 banned champion data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    /**
     * @return int
     */
    public function getChampionId(): int
    {
        return $this->championId;
    }

    /**
     * @param int $championId
     */
    public function setChampionId(int $championId)
    {
        $this->championId = $championId;
    }

    /**
     * @return int
     */
    public function getPickTurn(): int
    {
        return $this->pickTurn;
    }

    /**
     * @param int $pickTurn
     */
    public function setPickTurn(int $pickTurn)
    {
        $this->pickTurn = $pickTurn;
    }


}