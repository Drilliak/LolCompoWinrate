<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 24/12/2016
 * Time: 12:22
 */
class DbFactory
{
    const HOST = "localhost";
    const DB_NAME = "league_of_legends";
    const USER = "root";
    const PASS = "";

    public static function getConnection(){
        $db = new PDO("mysql:host=".self::HOST . ";dbname=" .self::DB_NAME
            ,self::USER, self::PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }

}