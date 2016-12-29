<?php

/**
 *  This object contains raw stat information.
 */
class RawStatsDto extends Schema
{
    /** @var  int */
    private $assists;

    /** @var  int Number of enemy inhibitors killed. */
    private $barracksKilled;

    /** @var  int */
    private $bountyLevel;

    /** @var  int */
    private $championsKilled;

    /** @var  int */
    private $combatPlayerScore;

    /** @var  int */
    private $consumablesPurchased;

    /** @var  int */
    private $damageDealtPlayer;

    /** @var  int */
    private $doubleKills;

    /** @var  int */
    private $firstBlood;

    /** @var  int */
    private $gold;

    /** @var  int */
    private $goldEarned;

    /** @var  int */
    private $goldSpent;

    /** @var  int */
    private $item0;

    /** @var  int */
    private $item1;

    /** @var int */
    private $item2;

    /** @var  int */
    private $item3;

    /** @var  int */
    private $item4;

    /** @var  int */
    private $item5;

    /** @var  int */
    private $item6;

    /** @var  int */
    private $itemsPurchased;

    /** @var  int */
    private $killingSprees;

    /** @var  int */
    private $largestCriticalStrike;

    /** @var  int */
    private $largestKillingSpree;

    /** @var  int */
    private $largestMultiKill;

    /** @var  int Number of tier 3 items built. */
    private $legendaryItemsCreated;

    /** @var  int */
    private $level;

    /** @var  int */
    private $magicDamageDealtPlayer;

    /** @var  int */
    private $magicDamageDealtToChampions;

    /** @var  int */
    private $magicDamageTaken;

    /** @var  int */
    private $minionsDenied;

    /** @var  int */
    private $minionsKilled;

    /** @var  int */
    private $neutralMinionsKilled;

    /** @var  int */
    private $neutralMinionsKilledEnemyJungle;

    /** @var  int */
    private $neutralMinionsKilledYourJungle;

    /** @var  bool Flag specifying if the summoner got the killing blow on the nexus. */
    private $nexusKilled;

    /** @var  int */
    private $nodeCapture;

    /** @var  int */
    private $nodeCaptureAssist;

    /** @var  int */
    private $nodeNeutralize;

    /** @var  int */
    private $nodeNeutralizeAssist;

    /** @var  int */
    private $numDeaths;

    /** @var  int */
    private $numItemsBought;

    /** @var  int */
    private $objectivePlayerScore;

    /** @var  int */
    private $pentaKills;

    /** @var  int */
    private $physicalDamageDealtPlayer;

    /** @var  int */
    private $physicalDamageDealtToChampions;

    /** @var  int */
    private $physicalDamageTaken;

    /** @var  int  Player position (Legal values: TOP(1), MIDDLE(2), JUNGLE(3), BOT(4)) */
    private $playerPosition;

    /** @var  int  Player role (Legal values: DUO(1), SUPPORT(2), CARRY(3), SOLO(4)) */
    private $playerRole;

    /** @var  int */
    private $playerScore0;

    /** @var  int */
    private $playerScore1;

    /** @var  int */
    private $playerScore2;

    /** @var  int */
    private $playerScore3;

    /** @var  int */
    private $playerScore4;
    /** @var  int */

    private $playerScore5;

    /** @var  int */
    private $playerScore6;

    /** @var  int */
    private $playerScore7;

    /** @var  int */
    private $playerScore8;

    /** @var  int */
    private $playerScore9;

    /** @var  int */
    private $quadraKills;

    /** @var  int */
    private $sightWardsBought;

    /** @var int Number of times first champion spell was cast. */
    private $spell1Cast;

    /** @var  int Number of times second champion spell was cast. */
    private $spell2Cast;

    /** @var  int Number of times third champion spell was cast. */
    private $spell3Cast;

    /** @var  int Number of times fourth champion spell was cast. */
    private $spell4Cast;

    /** @var  int */
    private $summonSpell1Cast;

    /** @var  int */
    private $summonSpell2Cast;

    /** @var  int */
    private $superMonsterKilled;

    /** @var  int */
    private $team;

    /** @var  int */
    private $teamObjective;

    /** @var  int */
    private $timePlayed;

    /** @var  int */
    private $totalDamageDealt;

    /** @var  int */
    private $totalDamageDealtToBuildings;

    /** @var  int */
    private $totalDamageDealtToChampions;

    /** @var  int */
    private $totalDamageTaken;

    /** @var  int */
    private $totalHeal;

    /** @var  int */
    private $totalPlayerScore;

    /** @var  int */
    private $totalScoreRank;

    /** @var  int */
    private $totalTimeCrowdControlDealt;

    /** @var  int */
    private $totalUnitsHealed;

    /** @var  int */
    private $tripleKills;

    /** @var  int */
    private $trueDamageDealtPlayer;

    /** @var  int */
    private $trueDamageDealtToChampions;

    /** @var  int */
    private $trueDamageTaken;

    /** @var  int */
    private $turretsKilled;

    /** @var  int */
    private $unrealKills;

    /** @var  int */
    private $victoryPointTotal;

    /** @var  int */
    private $visionWardsBought;

    /** @var  int */
    private $wardKilled;

    /** @var  int */
    private $wardPlaced;

    /** @var  bool Flag specifying whether or not this game was won. */
    private $win;

    /**
     * RawStatsDto constructor.
     * @param array $data
     *                  raw stats dto data.
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    /**
     * @return int
     */
    public function getAssists(): int
    {
        return $this->assists;
    }

    /**
     * @param int $assists
     */
    public function setAssists(int $assists)
    {
        $this->assists = $assists;
    }

    /**
     * @return int
     */
    public function getBarracksKilled(): int
    {
        return $this->barracksKilled;
    }

    /**
     * @param int $barracksKilled
     */
    public function setBarracksKilled(int $barracksKilled)
    {
        $this->barracksKilled = $barracksKilled;
    }

    /**
     * @return int
     */
    public function getBountyLevel(): int
    {
        return $this->bountyLevel;
    }

    /**
     * @param int $bountyLevel
     */
    public function setBountyLevel(int $bountyLevel)
    {
        $this->bountyLevel = $bountyLevel;
    }

    /**
     * @return int
     */
    public function getChampionsKilled(): int
    {
        return $this->championsKilled;
    }

    /**
     * @param int $championsKilled
     */
    public function setChampionsKilled(int $championsKilled)
    {
        $this->championsKilled = $championsKilled;
    }

    /**
     * @return int
     */
    public function getCombatPlayerScore(): int
    {
        return $this->combatPlayerScore;
    }

    /**
     * @param int $combatPlayerScore
     */
    public function setCombatPlayerScore(int $combatPlayerScore)
    {
        $this->combatPlayerScore = $combatPlayerScore;
    }

    /**
     * @return int
     */
    public function getConsumablesPurchased(): int
    {
        return $this->consumablesPurchased;
    }

    /**
     * @param int $consumablesPurchased
     */
    public function setConsumablesPurchased(int $consumablesPurchased)
    {
        $this->consumablesPurchased = $consumablesPurchased;
    }

    /**
     * @return int
     */
    public function getDamageDealtPlayer(): int
    {
        return $this->damageDealtPlayer;
    }

    /**
     * @param int $damageDealtPlayer
     */
    public function setDamageDealtPlayer(int $damageDealtPlayer)
    {
        $this->damageDealtPlayer = $damageDealtPlayer;
    }

    /**
     * @return int
     */
    public function getDoubleKills(): int
    {
        return $this->doubleKills;
    }

    /**
     * @param int $doubleKills
     */
    public function setDoubleKills(int $doubleKills)
    {
        $this->doubleKills = $doubleKills;
    }

    /**
     * @return int
     */
    public function getFirstBlood(): int
    {
        return $this->firstBlood;
    }

    /**
     * @param int $firstBlood
     */
    public function setFirstBlood(int $firstBlood)
    {
        $this->firstBlood = $firstBlood;
    }

    /**
     * @return int
     */
    public function getGold(): int
    {
        return $this->gold;
    }

    /**
     * @param int $gold
     */
    public function setGold(int $gold)
    {
        $this->gold = $gold;
    }

    /**
     * @return int
     */
    public function getGoldEarned(): int
    {
        return $this->goldEarned;
    }

    /**
     * @param int $goldEarned
     */
    public function setGoldEarned(int $goldEarned)
    {
        $this->goldEarned = $goldEarned;
    }

    /**
     * @return int
     */
    public function getGoldSpent(): int
    {
        return $this->goldSpent;
    }

    /**
     * @param int $goldSpent
     */
    public function setGoldSpent(int $goldSpent)
    {
        $this->goldSpent = $goldSpent;
    }

    /**
     * @return int
     */
    public function getItem0(): int
    {
        return $this->item0;
    }

    /**
     * @param int $item0
     */
    public function setItem0(int $item0)
    {
        $this->item0 = $item0;
    }

    /**
     * @return int
     */
    public function getItem1(): int
    {
        return $this->item1;
    }

    /**
     * @param int $item1
     */
    public function setItem1(int $item1)
    {
        $this->item1 = $item1;
    }

    /**
     * @return int
     */
    public function getItem2(): int
    {
        return $this->item2;
    }

    /**
     * @param int $item2
     */
    public function setItem2(int $item2)
    {
        $this->item2 = $item2;
    }

    /**
     * @return int
     */
    public function getItem3(): int
    {
        return $this->item3;
    }

    /**
     * @param int $item3
     */
    public function setItem3(int $item3)
    {
        $this->item3 = $item3;
    }

    /**
     * @return int
     */
    public function getItem4(): int
    {
        return $this->item4;
    }

    /**
     * @param int $item4
     */
    public function setItem4(int $item4)
    {
        $this->item4 = $item4;
    }

    /**
     * @return int
     */
    public function getItem5(): int
    {
        return $this->item5;
    }

    /**
     * @param int $item5
     */
    public function setItem5(int $item5)
    {
        $this->item5 = $item5;
    }

    /**
     * @return int
     */
    public function getItem6(): int
    {
        return $this->item6;
    }

    /**
     * @param int $item6
     */
    public function setItem6(int $item6)
    {
        $this->item6 = $item6;
    }

    /**
     * @return int
     */
    public function getItemsPurchased(): int
    {
        return $this->itemsPurchased;
    }

    /**
     * @param int $itemsPurchased
     */
    public function setItemsPurchased(int $itemsPurchased)
    {
        $this->itemsPurchased = $itemsPurchased;
    }

    /**
     * @return int
     */
    public function getKillingSprees(): int
    {
        return $this->killingSprees;
    }

    /**
     * @param int $killingSprees
     */
    public function setKillingSprees(int $killingSprees)
    {
        $this->killingSprees = $killingSprees;
    }

    /**
     * @return int
     */
    public function getLargestCriticalStrike(): int
    {
        return $this->largestCriticalStrike;
    }

    /**
     * @param int $largestCriticalStrike
     */
    public function setLargestCriticalStrike(int $largestCriticalStrike)
    {
        $this->largestCriticalStrike = $largestCriticalStrike;
    }

    /**
     * @return int
     */
    public function getLargestKillingSpree(): int
    {
        return $this->largestKillingSpree;
    }

    /**
     * @param int $largestKillingSpree
     */
    public function setLargestKillingSpree(int $largestKillingSpree)
    {
        $this->largestKillingSpree = $largestKillingSpree;
    }

    /**
     * @return int
     */
    public function getLargestMultiKill(): int
    {
        return $this->largestMultiKill;
    }

    /**
     * @param int $largestMultiKill
     */
    public function setLargestMultiKill(int $largestMultiKill)
    {
        $this->largestMultiKill = $largestMultiKill;
    }

    /**
     * @return int
     */
    public function getLegendaryItemsCreated(): int
    {
        return $this->legendaryItemsCreated;
    }

    /**
     * @param int $legendaryItemsCreated
     */
    public function setLegendaryItemsCreated(int $legendaryItemsCreated)
    {
        $this->legendaryItemsCreated = $legendaryItemsCreated;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level)
    {
        $this->level = $level;
    }

    /**
     * @return int
     */
    public function getMagicDamageDealtPlayer(): int
    {
        return $this->magicDamageDealtPlayer;
    }

    /**
     * @param int $magicDamageDealtPlayer
     */
    public function setMagicDamageDealtPlayer(int $magicDamageDealtPlayer)
    {
        $this->magicDamageDealtPlayer = $magicDamageDealtPlayer;
    }

    /**
     * @return int
     */
    public function getMagicDamageDealtToChampions(): int
    {
        return $this->magicDamageDealtToChampions;
    }

    /**
     * @param int $magicDamageDealtToChampions
     */
    public function setMagicDamageDealtToChampions(int $magicDamageDealtToChampions)
    {
        $this->magicDamageDealtToChampions = $magicDamageDealtToChampions;
    }

    /**
     * @return int
     */
    public function getMagicDamageTaken(): int
    {
        return $this->magicDamageTaken;
    }

    /**
     * @param int $magicDamageTaken
     */
    public function setMagicDamageTaken(int $magicDamageTaken)
    {
        $this->magicDamageTaken = $magicDamageTaken;
    }

    /**
     * @return int
     */
    public function getMinionsDenied(): int
    {
        return $this->minionsDenied;
    }

    /**
     * @param int $minionsDenied
     */
    public function setMinionsDenied(int $minionsDenied)
    {
        $this->minionsDenied = $minionsDenied;
    }

    /**
     * @return int
     */
    public function getMinionsKilled(): int
    {
        return $this->minionsKilled;
    }

    /**
     * @param int $minionsKilled
     */
    public function setMinionsKilled(int $minionsKilled)
    {
        $this->minionsKilled = $minionsKilled;
    }

    /**
     * @return int
     */
    public function getNeutralMinionsKilled(): int
    {
        return $this->neutralMinionsKilled;
    }

    /**
     * @param int $neutralMinionsKilled
     */
    public function setNeutralMinionsKilled(int $neutralMinionsKilled)
    {
        $this->neutralMinionsKilled = $neutralMinionsKilled;
    }

    /**
     * @return int
     */
    public function getNeutralMinionsKilledEnemyJungle(): int
    {
        return $this->neutralMinionsKilledEnemyJungle;
    }

    /**
     * @param int $neutralMinionsKilledEnemyJungle
     */
    public function setNeutralMinionsKilledEnemyJungle(int $neutralMinionsKilledEnemyJungle)
    {
        $this->neutralMinionsKilledEnemyJungle = $neutralMinionsKilledEnemyJungle;
    }

    /**
     * @return int
     */
    public function getNeutralMinionsKilledYourJungle(): int
    {
        return $this->neutralMinionsKilledYourJungle;
    }

    /**
     * @param int $neutralMinionsKilledYourJungle
     */
    public function setNeutralMinionsKilledYourJungle(int $neutralMinionsKilledYourJungle)
    {
        $this->neutralMinionsKilledYourJungle = $neutralMinionsKilledYourJungle;
    }

    /**
     * @return bool
     */
    public function isNexusKilled(): bool
    {
        return $this->nexusKilled;
    }

    /**
     * @param bool $nexusKilled
     */
    public function setNexusKilled(bool $nexusKilled)
    {
        $this->nexusKilled = $nexusKilled;
    }

    /**
     * @return int
     */
    public function getNodeCapture(): int
    {
        return $this->nodeCapture;
    }

    /**
     * @param int $nodeCapture
     */
    public function setNodeCapture(int $nodeCapture)
    {
        $this->nodeCapture = $nodeCapture;
    }

    /**
     * @return int
     */
    public function getNodeCaptureAssist(): int
    {
        return $this->nodeCaptureAssist;
    }

    /**
     * @param int $nodeCaptureAssist
     */
    public function setNodeCaptureAssist(int $nodeCaptureAssist)
    {
        $this->nodeCaptureAssist = $nodeCaptureAssist;
    }

    /**
     * @return int
     */
    public function getNodeNeutralize(): int
    {
        return $this->nodeNeutralize;
    }

    /**
     * @param int $nodeNeutralize
     */
    public function setNodeNeutralize(int $nodeNeutralize)
    {
        $this->nodeNeutralize = $nodeNeutralize;
    }

    /**
     * @return int
     */
    public function getNodeNeutralizeAssist(): int
    {
        return $this->nodeNeutralizeAssist;
    }

    /**
     * @param int $nodeNeutralizeAssist
     */
    public function setNodeNeutralizeAssist(int $nodeNeutralizeAssist)
    {
        $this->nodeNeutralizeAssist = $nodeNeutralizeAssist;
    }

    /**
     * @return int
     */
    public function getNumDeaths(): int
    {
        return $this->numDeaths;
    }

    /**
     * @param int $numDeaths
     */
    public function setNumDeaths(int $numDeaths)
    {
        $this->numDeaths = $numDeaths;
    }

    /**
     * @return int
     */
    public function getNumItemsBought(): int
    {
        return $this->numItemsBought;
    }

    /**
     * @param int $numItemsBought
     */
    public function setNumItemsBought(int $numItemsBought)
    {
        $this->numItemsBought = $numItemsBought;
    }

    /**
     * @return int
     */
    public function getObjectivePlayerScore(): int
    {
        return $this->objectivePlayerScore;
    }

    /**
     * @param int $objectivePlayerScore
     */
    public function setObjectivePlayerScore(int $objectivePlayerScore)
    {
        $this->objectivePlayerScore = $objectivePlayerScore;
    }

    /**
     * @return int
     */
    public function getPentaKills(): int
    {
        return $this->pentaKills;
    }

    /**
     * @param int $pentaKills
     */
    public function setPentaKills(int $pentaKills)
    {
        $this->pentaKills = $pentaKills;
    }

    /**
     * @return int
     */
    public function getPhysicalDamageDealtPlayer(): int
    {
        return $this->physicalDamageDealtPlayer;
    }

    /**
     * @param int $physicalDamageDealtPlayer
     */
    public function setPhysicalDamageDealtPlayer(int $physicalDamageDealtPlayer)
    {
        $this->physicalDamageDealtPlayer = $physicalDamageDealtPlayer;
    }

    /**
     * @return int
     */
    public function getPhysicalDamageDealtToChampions(): int
    {
        return $this->physicalDamageDealtToChampions;
    }

    /**
     * @param int $physicalDamageDealtToChampions
     */
    public function setPhysicalDamageDealtToChampions(int $physicalDamageDealtToChampions)
    {
        $this->physicalDamageDealtToChampions = $physicalDamageDealtToChampions;
    }

    /**
     * @return int
     */
    public function getPhysicalDamageTaken(): int
    {
        return $this->physicalDamageTaken;
    }

    /**
     * @param int $physicalDamageTaken
     */
    public function setPhysicalDamageTaken(int $physicalDamageTaken)
    {
        $this->physicalDamageTaken = $physicalDamageTaken;
    }

    /**
     * @return int
     */
    public function getPlayerPosition(): int
    {
        return $this->playerPosition;
    }

    /**
     * @param int $playerPosition
     */
    public function setPlayerPosition(int $playerPosition)
    {
        $this->playerPosition = $playerPosition;
    }

    /**
     * @return int
     */
    public function getPlayerRole(): int
    {
        return $this->playerRole;
    }

    /**
     * @param int $playerRole
     */
    public function setPlayerRole(int $playerRole)
    {
        $this->playerRole = $playerRole;
    }

    /**
     * @return int
     */
    public function getPlayerScore0(): int
    {
        return $this->playerScore0;
    }

    /**
     * @param int $playerScore0
     */
    public function setPlayerScore0(int $playerScore0)
    {
        $this->playerScore0 = $playerScore0;
    }

    /**
     * @return int
     */
    public function getPlayerScore1(): int
    {
        return $this->playerScore1;
    }

    /**
     * @param int $playerScore1
     */
    public function setPlayerScore1(int $playerScore1)
    {
        $this->playerScore1 = $playerScore1;
    }

    /**
     * @return int
     */
    public function getPlayerScore2(): int
    {
        return $this->playerScore2;
    }

    /**
     * @param int $playerScore2
     */
    public function setPlayerScore2(int $playerScore2)
    {
        $this->playerScore2 = $playerScore2;
    }

    /**
     * @return int
     */
    public function getPlayerScore3(): int
    {
        return $this->playerScore3;
    }

    /**
     * @param int $playerScore3
     */
    public function setPlayerScore3(int $playerScore3)
    {
        $this->playerScore3 = $playerScore3;
    }

    /**
     * @return int
     */
    public function getPlayerScore4(): int
    {
        return $this->playerScore4;
    }

    /**
     * @param int $playerScore4
     */
    public function setPlayerScore4(int $playerScore4)
    {
        $this->playerScore4 = $playerScore4;
    }

    /**
     * @return int
     */
    public function getPlayerScore5(): int
    {
        return $this->playerScore5;
    }

    /**
     * @param int $playerScore5
     */
    public function setPlayerScore5(int $playerScore5)
    {
        $this->playerScore5 = $playerScore5;
    }

    /**
     * @return int
     */
    public function getPlayerScore6(): int
    {
        return $this->playerScore6;
    }

    /**
     * @param int $playerScore6
     */
    public function setPlayerScore6(int $playerScore6)
    {
        $this->playerScore6 = $playerScore6;
    }

    /**
     * @return int
     */
    public function getPlayerScore7(): int
    {
        return $this->playerScore7;
    }

    /**
     * @param int $playerScore7
     */
    public function setPlayerScore7(int $playerScore7)
    {
        $this->playerScore7 = $playerScore7;
    }

    /**
     * @return int
     */
    public function getPlayerScore8(): int
    {
        return $this->playerScore8;
    }

    /**
     * @param int $playerScore8
     */
    public function setPlayerScore8(int $playerScore8)
    {
        $this->playerScore8 = $playerScore8;
    }

    /**
     * @return int
     */
    public function getPlayerScore9(): int
    {
        return $this->playerScore9;
    }

    /**
     * @param int $playerScore9
     */
    public function setPlayerScore9(int $playerScore9)
    {
        $this->playerScore9 = $playerScore9;
    }

    /**
     * @return int
     */
    public function getQuadraKills(): int
    {
        return $this->quadraKills;
    }

    /**
     * @param int $quadraKills
     */
    public function setQuadraKills(int $quadraKills)
    {
        $this->quadraKills = $quadraKills;
    }

    /**
     * @return int
     */
    public function getSightWardsBought(): int
    {
        return $this->sightWardsBought;
    }

    /**
     * @param int $sightWardsBought
     */
    public function setSightWardsBought(int $sightWardsBought)
    {
        $this->sightWardsBought = $sightWardsBought;
    }

    /**
     * @return int
     */
    public function getSpell1Cast(): int
    {
        return $this->spell1Cast;
    }

    /**
     * @param int $spell1Cast
     */
    public function setSpell1Cast(int $spell1Cast)
    {
        $this->spell1Cast = $spell1Cast;
    }

    /**
     * @return int
     */
    public function getSpell2Cast(): int
    {
        return $this->spell2Cast;
    }

    /**
     * @param int $spell2Cast
     */
    public function setSpell2Cast(int $spell2Cast)
    {
        $this->spell2Cast = $spell2Cast;
    }

    /**
     * @return int
     */
    public function getSpell3Cast(): int
    {
        return $this->spell3Cast;
    }

    /**
     * @param int $spell3Cast
     */
    public function setSpell3Cast(int $spell3Cast)
    {
        $this->spell3Cast = $spell3Cast;
    }

    /**
     * @return int
     */
    public function getSpell4Cast(): int
    {
        return $this->spell4Cast;
    }

    /**
     * @param int $spell4Cast
     */
    public function setSpell4Cast(int $spell4Cast)
    {
        $this->spell4Cast = $spell4Cast;
    }

    /**
     * @return int
     */
    public function getSummonSpell1Cast(): int
    {
        return $this->summonSpell1Cast;
    }

    /**
     * @param int $summonSpell1Cast
     */
    public function setSummonSpell1Cast(int $summonSpell1Cast)
    {
        $this->summonSpell1Cast = $summonSpell1Cast;
    }

    /**
     * @return int
     */
    public function getSummonSpell2Cast(): int
    {
        return $this->summonSpell2Cast;
    }

    /**
     * @param int $summonSpell2Cast
     */
    public function setSummonSpell2Cast(int $summonSpell2Cast)
    {
        $this->summonSpell2Cast = $summonSpell2Cast;
    }

    /**
     * @return int
     */
    public function getSuperMonsterKilled(): int
    {
        return $this->superMonsterKilled;
    }

    /**
     * @param int $superMonsterKilled
     */
    public function setSuperMonsterKilled(int $superMonsterKilled)
    {
        $this->superMonsterKilled = $superMonsterKilled;
    }

    /**
     * @return int
     */
    public function getTeam(): int
    {
        return $this->team;
    }

    /**
     * @param int $team
     */
    public function setTeam(int $team)
    {
        $this->team = $team;
    }

    /**
     * @return int
     */
    public function getTeamObjective(): int
    {
        return $this->teamObjective;
    }

    /**
     * @param int $teamObjective
     */
    public function setTeamObjective(int $teamObjective)
    {
        $this->teamObjective = $teamObjective;
    }

    /**
     * @return int
     */
    public function getTimePlayed(): int
    {
        return $this->timePlayed;
    }

    /**
     * @param int $timePlayed
     */
    public function setTimePlayed(int $timePlayed)
    {
        $this->timePlayed = $timePlayed;
    }

    /**
     * @return int
     */
    public function getTotalDamageDealt(): int
    {
        return $this->totalDamageDealt;
    }

    /**
     * @param int $totalDamageDealt
     */
    public function setTotalDamageDealt(int $totalDamageDealt)
    {
        $this->totalDamageDealt = $totalDamageDealt;
    }

    /**
     * @return int
     */
    public function getTotalDamageDealtToBuildings(): int
    {
        return $this->totalDamageDealtToBuildings;
    }

    /**
     * @param int $totalDamageDealtToBuildings
     */
    public function setTotalDamageDealtToBuildings(int $totalDamageDealtToBuildings)
    {
        $this->totalDamageDealtToBuildings = $totalDamageDealtToBuildings;
    }

    /**
     * @return int
     */
    public function getTotalDamageDealtToChampions(): int
    {
        return $this->totalDamageDealtToChampions;
    }

    /**
     * @param int $totalDamageDealtToChampions
     */
    public function setTotalDamageDealtToChampions(int $totalDamageDealtToChampions)
    {
        $this->totalDamageDealtToChampions = $totalDamageDealtToChampions;
    }

    /**
     * @return int
     */
    public function getTotalDamageTaken(): int
    {
        return $this->totalDamageTaken;
    }

    /**
     * @param int $totalDamageTaken
     */
    public function setTotalDamageTaken(int $totalDamageTaken)
    {
        $this->totalDamageTaken = $totalDamageTaken;
    }

    /**
     * @return int
     */
    public function getTotalHeal(): int
    {
        return $this->totalHeal;
    }

    /**
     * @param int $totalHeal
     */
    public function setTotalHeal(int $totalHeal)
    {
        $this->totalHeal = $totalHeal;
    }

    /**
     * @return int
     */
    public function getTotalPlayerScore(): int
    {
        return $this->totalPlayerScore;
    }

    /**
     * @param int $totalPlayerScore
     */
    public function setTotalPlayerScore(int $totalPlayerScore)
    {
        $this->totalPlayerScore = $totalPlayerScore;
    }

    /**
     * @return int
     */
    public function getTotalScoreRank(): int
    {
        return $this->totalScoreRank;
    }

    /**
     * @param int $totalScoreRank
     */
    public function setTotalScoreRank(int $totalScoreRank)
    {
        $this->totalScoreRank = $totalScoreRank;
    }

    /**
     * @return int
     */
    public function getTotalTimeCrowdControlDealt(): int
    {
        return $this->totalTimeCrowdControlDealt;
    }

    /**
     * @param int $totalTimeCrowdControlDealt
     */
    public function setTotalTimeCrowdControlDealt(int $totalTimeCrowdControlDealt)
    {
        $this->totalTimeCrowdControlDealt = $totalTimeCrowdControlDealt;
    }

    /**
     * @return int
     */
    public function getTotalUnitsHealed(): int
    {
        return $this->totalUnitsHealed;
    }

    /**
     * @param int $totalUnitsHealed
     */
    public function setTotalUnitsHealed(int $totalUnitsHealed)
    {
        $this->totalUnitsHealed = $totalUnitsHealed;
    }

    /**
     * @return int
     */
    public function getTripleKills(): int
    {
        return $this->tripleKills;
    }

    /**
     * @param int $tripleKills
     */
    public function setTripleKills(int $tripleKills)
    {
        $this->tripleKills = $tripleKills;
    }

    /**
     * @return int
     */
    public function getTrueDamageDealtPlayer(): int
    {
        return $this->trueDamageDealtPlayer;
    }

    /**
     * @param int $trueDamageDealtPlayer
     */
    public function setTrueDamageDealtPlayer(int $trueDamageDealtPlayer)
    {
        $this->trueDamageDealtPlayer = $trueDamageDealtPlayer;
    }

    /**
     * @return int
     */
    public function getTrueDamageDealtToChampions(): int
    {
        return $this->trueDamageDealtToChampions;
    }

    /**
     * @param int $trueDamageDealtToChampions
     */
    public function setTrueDamageDealtToChampions(int $trueDamageDealtToChampions)
    {
        $this->trueDamageDealtToChampions = $trueDamageDealtToChampions;
    }

    /**
     * @return int
     */
    public function getTrueDamageTaken(): int
    {
        return $this->trueDamageTaken;
    }

    /**
     * @param int $trueDamageTaken
     */
    public function setTrueDamageTaken(int $trueDamageTaken)
    {
        $this->trueDamageTaken = $trueDamageTaken;
    }

    /**
     * @return int
     */
    public function getTurretsKilled(): int
    {
        return $this->turretsKilled;
    }

    /**
     * @param int $turretsKilled
     */
    public function setTurretsKilled(int $turretsKilled)
    {
        $this->turretsKilled = $turretsKilled;
    }

    /**
     * @return int
     */
    public function getUnrealKills(): int
    {
        return $this->unrealKills;
    }

    /**
     * @param int $unrealKills
     */
    public function setUnrealKills(int $unrealKills)
    {
        $this->unrealKills = $unrealKills;
    }

    /**
     * @return int
     */
    public function getVictoryPointTotal(): int
    {
        return $this->victoryPointTotal;
    }

    /**
     * @param int $victoryPointTotal
     */
    public function setVictoryPointTotal(int $victoryPointTotal)
    {
        $this->victoryPointTotal = $victoryPointTotal;
    }

    /**
     * @return int
     */
    public function getVisionWardsBought(): int
    {
        return $this->visionWardsBought;
    }

    /**
     * @param int $visionWardsBought
     */
    public function setVisionWardsBought(int $visionWardsBought)
    {
        $this->visionWardsBought = $visionWardsBought;
    }

    /**
     * @return int
     */
    public function getWardKilled(): int
    {
        return $this->wardKilled;
    }

    /**
     * @param int $wardKilled
     */
    public function setWardKilled(int $wardKilled)
    {
        $this->wardKilled = $wardKilled;
    }

    /**
     * @return int
     */
    public function getWardPlaced(): int
    {
        return $this->wardPlaced;
    }

    /**
     * @param int $wardPlaced
     */
    public function setWardPlaced(int $wardPlaced)
    {
        $this->wardPlaced = $wardPlaced;
    }

    /**
     * @return bool
     */
    public function isWin(): bool
    {
        return $this->win;
    }

    /**
     * @param bool $win
     */
    public function setWin(bool $win)
    {
        $this->win = $win;
    }


}