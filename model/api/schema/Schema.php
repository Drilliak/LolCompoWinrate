<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 22:01
 */
abstract class Schema
{

    /* Array of the variable class types */
    const VAR_TYPE = array();

    const PRIMITIF_TYPE = "primitifType";

    public static function getType(string $varName){
        $class = get_called_class();
        if (key_exists($varName, $class::VAR_TYPE)){
            return $class::VAR_TYPE[$varName];
        }
        return $class::PRIMITIF_TYPE;
    }

    protected function __construct(array $data)
    {
        $this->hydrate($data);
    }


    private function hydrate(array $data)
    {
        foreach ($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
}