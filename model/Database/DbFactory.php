<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 24/12/2016
 * Time: 12:22
 */
class DbFactory
{
    /** @var string dabatase host */
    private $host;

    /** @var string databse name */
    private $dbName;

    /** @var string user name */
    private $user;

    /** @var string database password */
    private $pass;

    /** @var  PDO database connection object */
    private $dbConnection;

    /**
     * DbFactory constructor.
     * @param string $host
     * @param string $dbName
     * @param string $user
     * @param string $pass
     */
    private function __construct(string $host, string $dbName, string $user, string $pass)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->pass = $pass;
    }

    /**
     * @param string $host
     * @param string $dbName
     * @param string $user
     * @param string $pass
     * @return DbFactory
     */
    public static function newInstance(string $host, string $dbName, string $user, string $pass) : DbFactory{
        return new DbFactory($host, $dbName, $user, $pass);
    }

    private function getConnection() : PDO{
        if (is_null($this->dbConnection)){
            $this->dbConnection = new PDO("mysql:host=".$this->host. ";dbname=" .$this->dbName
                ,$this->user, $this->pass);
            $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->dbConnection;
    }

    /**
     * New champion manager.
     *
     * @return ChampionManager
     *          the champion manager
     */
    public function newChampionManager() : ChampionManager{
        return new ChampionManager($this->getConnection());
    }

    /**
     * New compo occurences manager
     * @return CompoOccurencesManager
     *          the compo occurences manager.
     */
    public function newCompoOccurencesManager() : CompoOccurencesManager{
        return new CompoOccurencesManager($this->getConnection());
    }

}