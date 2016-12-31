<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 29/12/2016
 * Time: 15:15
 */
class CompoOccurencesManager
{
    /** @var  PDO */
    private $db;

    const COMPO_OCCURENCES_TABLE_NAME = "compo_occurences";

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Add a compo to the database.
     * If the compo already exists, increas the occurence.
     * @param array $compo
     *                  compo data (key legal value : acd, support)
     * @param bool $win
     */
    public function addCompo(array $compo, bool $win){
        $sql = "SELECT EXISTS (SELECT * FROM " . self::COMPO_OCCURENCES_TABLE_NAME .
            " WHERE adc = :adc AND support = :support) AS exist";
        $query = $this->db->prepare($sql);
        $adc = $compo["adc"];
        $support = $compo["support"];
        $query->bindValue(':adc',$adc);
        $query->bindValue(':support', $support);
        $query->execute();
        $res = $query->fetch();
        $exist = (bool)$res["exist"];

        if ($exist){
            $sql = "";
            if ($win){
                $sql = "UPDATE " . self::COMPO_OCCURENCES_TABLE_NAME . " SET wins_occurences=wins_occurences+1 
                WHERE adc = :adc AND support = :support";
            } else{
                $sql = "UPDATE " . self::COMPO_OCCURENCES_TABLE_NAME . " SET looses_occurences=looses_occurences+1 
                WHERE adc = :adc AND support = :support";
            }
            $query = $this->db->prepare($sql);
            $query->bindValue(':adc',$adc);
            $query->bindValue(':support', $support);
            $query->execute();
        } else{
            $qel = "";
            if ($win){
                $sql = "INSERT INTO " .self::COMPO_OCCURENCES_TABLE_NAME .
                    "(adc, support, wins_occurences) VALUES (:adc, :support, 1)";
            } else {
                $sql = "INSERT INTO " .self::COMPO_OCCURENCES_TABLE_NAME .
                    "(adc, support, looses_occurences) VALUES (:adc, :support, 1)";
            }

            $query = $this->db->prepare($sql);
            $query->bindValue(':adc',$adc);
            $query->bindValue(':support', $support);
            $query->execute();
        }
    }
}