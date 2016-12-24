<?php

/**
 * Classe représentant un champion.
 *
 * User: Vincent
 * Date: 24/12/2016
 * Time: 02:18
 */
class Champion
{

    private $id;
    private $name;


    // Setters

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}