<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 26/12/2016
 * Time: 21:56
 */
class GameDto extends Schema
{
    /** @var int champion id associated with game */
    private $championId;

    /** @var int Date that end game data was recorded, specified as epoch milliseconds */
    private $createDate;

    /** @var array array of other players associated with the game */
    private $fellowPlayers;

    /** @var int Game Id */
    private $gameId;

    /** @var string game mode */
    private $gameMode;

    /** @var  string game type */
    private $gameType;

    /** @var  boolean Invalid flag */
    private $invalid;

    /** @var  int IP earned */
    private $ipEarned;

    /** @var  int level */
    private $level;

    /** @var  int map ID */
    private $mapId;

    /** @var  int ID of the first summoner spell */
    private $spell1;

    /** @var  int ID of the second summoner spell */
    private $spell2;

    //private $stats;

    /** @var  string Game sub-type */
    private $subType;

    /** @var  int    Team ID associated with game. Team ID 100 is blue team. Team ID 200 is purple team. */
    private $teamId;

    public function __construct(array $data)
    {
        parent::__construct($data);
    }


    public function getChampionId(): int
    {
        return $this->championId;
    }


    public function setChampionId(int $championId)
    {
        $this->championId = $championId;
    }


    public function getCreateDate(): int
    {
        return $this->createDate;
    }


    public function setCreateDate(int $createDate)
    {
        $this->createDate = $createDate;
    }


    public function getFellowPlayers(): array
    {
        return $this->fellowPlayers;
    }


    public function setFellowPlayers(array $fellowPlayers)
    {
        $this->fellowPlayers = $fellowPlayers;
    }


    public function getGameId(): int
    {
        return $this->gameId;
    }


    public function setGameId(int $gameId)
    {
        $this->gameId = $gameId;
    }


    public function getGameMode(): string
    {
        return $this->gameMode;
    }


    public function setGameMode(string $gameMode)
    {
        if (GameMode::isValidName($gameMode)){
            $this->gameMode = $gameMode;
        }

    }


    public function getGameType(): string
    {
        return $this->gameType;
    }


    public function setGameType(string $gameType)
    {
        if (GameType::isValidName($gameType)){
            $this->gameType = $gameType;
        }

    }


    public function isInvalid(): bool
    {
        return $this->invalid;
    }


    public function setInvalid(bool $invalid)
    {
        $this->invalid = $invalid;
    }


    public function getIpEarned(): int
    {
        return $this->ipEarned;
    }


    public function setIpEarned(int $ipEarned)
    {
        $this->ipEarned = $ipEarned;
    }


    public function getLevel(): int
    {
        return $this->level;
    }


    public function setLevel(int $level)
    {
        $this->level = $level;
    }


    public function getMapId(): int
    {
        return $this->mapId;
    }


    public function setMapId(int $mapId)
    {
        $this->mapId = $mapId;
    }


    public function getSpell1(): int
    {
        return $this->spell1;
    }


    public function setSpell1(int $spell1)
    {
        $this->spell1 = $spell1;
    }


    public function getSpell2(): int
    {
        return $this->spell2;
    }


    public function setSpell2(int $spell2)
    {
        $this->spell2 = $spell2;
    }


    public function getSubType(): string
    {
        return $this->subType;
    }


    public function setSubType(string $subType)
    {
        if (SubType::isValidName($subType)){
            $this->subType = $subType;
        }

    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function setTeamId(int $teamId)
    {
        $this->teamId = $teamId;
    }


}