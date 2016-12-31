<?php

/**
 *This object contains game event information. Note that not all legal type values documented below are valid
 * for all games. Event data evolves over time and certain values may be relevant only for older or newer games.
 */
class Event extends Schema
{
    /**
     * Event constructor.
     * @param array $data
     *                  event data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }
}