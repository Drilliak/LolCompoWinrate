<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 28/12/2016
 * Time: 21:37
 */
abstract class JsonParser
{

    /**
     * Converts a json object into an object of the specified type.
     * @param $json
     *          decoded json object
     * @param $className string
     *          object type
     * @return mixed
     */

    public static function fromJson(&$json, string $className)
    {
        $data = array();

        foreach ($json as $key => $value) {
            $varType = $className::getType($key);

            if ($varType == Schema::PRIMITIF_TYPE) {
                $data[$key] = $value;
            } elseif (substr($varType,0,5) == "array"){
                $class = substr($varType,5);
                $list= array();
                foreach ($value as $subValue){
                    array_push($list, self::fromJson($subValue, $class));
                }
                $data[$key] = $list;

            }
            else {
                $data[$key] = self::fromJson($value, $varType);
            }
        }

        return new $className($data);
    }
}