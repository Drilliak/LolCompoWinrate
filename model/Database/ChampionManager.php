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
     * @var PDO PDO instance.
     */
    private $db;

    const CHAMPION_TABLE_NAME = "champion";

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Ajouter un champion à la table CHAMPION_TABLE_NAME
     * @param ChampionDto $champion Champion à ajouter
     * @return bool TRUE on success or FALSE on failure.
     */
    public function add(ChampionDto $champion) : bool{
        $sql = "INSERT INTO " . self::CHAMPION_TABLE_NAME . '(id, name) VALUES(:id, :name)';
        $query = $this->db->prepare($sql);
        $query->bindValue(':name', $champion->getName());
        $query->bindValue(':id', $champion->getId());
        return $query->execute();
    }

    /**
     *
     */
    public function fillChampionDatabase(){
        $sqlTruncate = "TRUNCATE TABLE " . self::CHAMPION_TABLE_NAME;
        $query = $this->db->prepare($sqlTruncate);
        $query = $query->execute();

        $factory = RiotApiQueryFactory::newInstance("308fdabd-0365-4103-b5ec-e8e965db5515", "euw");
        $champions = $factory->newStaticDataApiQuery()->listChampions();
        foreach ($champions as $champion){
            $this->add($champion);

        }
    }


}