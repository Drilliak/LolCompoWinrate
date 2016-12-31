<?php

/**
 * This object contains game frame information
 */
class Frame extends Schema
{
    /**
     * Frame constructor.
     * @param array $data
     *                  frame data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }
}