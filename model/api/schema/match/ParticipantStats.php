<?php

/**
 * This object contains participant statistics information
 */
class ParticipantStats extends Schema
{
    /**
     * ParticipantStats constructor.
     * @param array $data
     *                  participant stats data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }
}