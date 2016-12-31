<?php

/**
 * This object contains game timeline information
 */
class Timeline extends Schema
{
    const VAR_TYPE = array(
        "frames" => "arrayFrame"
    );
    /** @var  float Time between each returned frame in milliseconds.*/
    private $frameInterval;

    /** @var  array List of timeline frames for the game. */
    private $frames;

    /**
     * Timeline constructor.
     * @param array $data
     *                 timeline data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    /**
     * @return float
     */
    public function getFrameInterval(): float
    {
        return $this->frameInterval;
    }

    /**
     * @param float $frameInterval
     */
    public function setFrameInterval(float $frameInterval)
    {
        $this->frameInterval = $frameInterval;
    }


}