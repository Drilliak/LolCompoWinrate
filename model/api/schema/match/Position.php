<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 29/12/2016
 * Time: 12:36
 */
class Position extends Schema
{
    /** @var  int */
    private $x;

    /** @var  int */
    private $y;

    /**
     * Position constructor.
     * @param array $data
     *                  position data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @param int $x
     */
    public function setX(int $x)
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY(int $y)
    {
        $this->y = $y;
    }


}