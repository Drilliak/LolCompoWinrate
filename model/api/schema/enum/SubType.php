<?php

/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 27/12/2016
 * Time: 00:00
 */
class SubType extends BasicEnum
{
    /** Custom games */
    const NONE = "NONE";

    /** Summoner's Rift unranked games */
    const NORMAL = "NORMAL";

    /** Twisted Treeline unranked games */
    const NORMAL_3x3 = "NORMAL_3x3";

    /** Dominion/Crystal Scar games */
    const ODIN_UNRANKED = "ODIN_UNRANKED";

    /** ARAM / Howling Abyss games */
    const ARAM_UNRANKED_5x5 = "ARAM_UNRANKED_5x5";

    /** Summoner's Rift and Crystal Scar games played against Intro, Beginner, or Intermediate AI */
    const BOT = "BOT";

    /** Twisted Treeline games played against AI */
    const BOT_3x3 = "BOT_3x3";

    /** Summoner's Rift ranked solo 5v5 games from earlier seasons and Summoner's
     * Rift ranked solo games from current season that use Team Builder matchmaking */
    const RANKED_SOLO_5x5 = "RANKED_SOLO_5x5";

    /** Twisted Treeline ranked team games */
    const RANKED_TEAM_3x3 = "RANKED_TEAM_3x3";

    /** Summoner's Rift ranked team games */
    const RANKED_TEAM_5x5 = "RANKED_TEAM_5x5";

    /** One for All games */
    const ONEFORALL_5x5 = "ONEFORALL_5x5";

    /** Snowdown Showdown 1x1 games */
    const FIRSTBLOOD_1x1 = "FIRSTBLOOD_1x1";

    /** Snowdown Showdown 2x2 games */
    const FIRSTBLOOD_2x2 = "FIRSTBLOOD_2x2";

    /** Summoner's Rift 6x6 Hexakill games */
    const SR_6x6 = "SR_6x6";

    /** Team Builder games */
    const CAP_5x5 = "CAP_5x5";

    /** Ultra Rapid Fire games */
    const URF = "URF";

    /** Ultra Rapid Fire games played against AI */
    const URF_BOT = "URF_BOT";

    /** Summoner's Rift games played against Nightmare AI */
    const NIGHTMARE_BOT = "NIGHTMARE_BOT";

    /** Ascension games */
    const ASCENSION = "ASCENSION";

    /** Twisted Treeline 6x6 Hexakill games */
    const HEXAKILL = "HEXAKILL";

    /** King Poro games */
    const KING_PORO = "KING_PORO";

    /** Nemesis games */
    const COUNTER_PICK = "COUNTER_PICK";

    /** Black Market Brawlers games */
    const BILGEWATER = "BILGEWATER";

    /** Nexus Siege games */
    const SIEGE = "SIEGE";

    /** Ranked Flex Twisted Treeline games */
    const RANKED_FLEX_TT = "RANKED_FLEX_TT";

    /** Ranked Flex Summoner's Rift games */
    const RANKED_FLEX_SR = "RANKED_FLEX_SR";
}