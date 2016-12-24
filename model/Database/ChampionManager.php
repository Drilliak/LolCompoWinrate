<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 24/12/2016
 * Time: 11:26
 */
class ChampionManager
{
    /**
     * @var Instance de SPDO
     */
    private $db;

    const CHAMPION_TABLE_NAME = "champion";

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Ajouter un champion à la table CHAMPION_TABLE_NAME
     * @param Champion $champion Champion à ajouter
     */
    public function add(Champion $champion){
        $sql = "INSERT INTO " . self::CHAMPION_TABLE_NAME . '(id, name) VALUES(:id, :name)';
        $query = $this->db->prepare($sql);
        $query->bindValue(':name', $champion->getName());
        $query->bindValue(':id', $champion->getId());
        $query->execute();
    }

    /**
     * @param array $champions
     */
    public function fillChampionDatabase(){
        $sqlTruncate = "TRUNCATE TABLE " . self::CHAMPION_TABLE_NAME;
        $query = $this->db->prepare($sqlTruncate);
        $query = $query->execute();

        $apiManager = new StaticDataApiManager();
        $champions = $apiManager->getChampionsId();
        foreach ($champions as $champion){
            $this->add($champion);

        }
    }


}