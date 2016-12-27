<?php
 require './model/Autoload.php';



$factory = RiotApiQueryFactory::newInstance("308fdabd-0365-4103-b5ec-e8e965db5515", "euw");

$summonerNames = array("Drilliak", "Rolesafe");
var_dump($factory->newSummonerApiQuery()->withSummonerName("Drilliak")->getSummoner());