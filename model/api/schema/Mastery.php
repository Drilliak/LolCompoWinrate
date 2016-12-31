<?php

/**
 * This object contains mastery information
 */
class Mastery extends Schema
{
    /** @var  float Mastery ID */
    private $masteryId;

    /** @var  float Mastery rank */
    private $rank;

    /**
     * Mastery constructor.
     * @param array $data
     *                  mastery data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    /**
     * @return float
     */
    public function getMasteryId(): float
    {
        return $this->masteryId;
    }

    /**
     * @param float $masteryId
     */
    public function setMasteryId(float $masteryId)
    {
        $this->masteryId = $masteryId;
    }

    /**
     * @return float
     */
    public function getRank(): float
    {
        return $this->rank;
    }

    /**
     * @param float $rank
     */
    public function setRank(float $rank)
    {
        $this->rank = $rank;
    }


}