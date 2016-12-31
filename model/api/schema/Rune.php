<?php

/**
 * This object contains rune information
 */
class Rune extends Schema
{
    /** @var  float Rune rank */
    private $rank;

    /** @var  float Rune ID */
    private $runeId;

    /**
     * Rune constructor.
     * @param array $data
     *                  rune data.
     */
    function __construct(array $data)
    {
        parent::__construct($data);
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

    /**
     * @return float
     */
    public function getRuneId(): float
    {
        return $this->runeId;
    }

    /**
     * @param float $runeId
     */
    public function setRuneId(float $runeId)
    {
        $this->runeId = $runeId;
    }


}