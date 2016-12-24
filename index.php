<?php
 require './model/Autoload.php';


$sumMana = new SummonerApiManager();
$man = new GameApiManager(29563141 );

var_dump($sumMana->getSummonerName($man->getParticipants()));