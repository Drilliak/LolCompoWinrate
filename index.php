<?php
 require './model/Autoload.php';

$db  = DbFactory::getConnection();

 $manager = new ChampionManager($db);

 $manager->fillChampionDatabase();
