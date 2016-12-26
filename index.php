<?php
 require './model/Autoload.php';



$factory = RiotApiQueryFactory::newInstance("308fdabd-0365-4103-b5ec-e8e965db5515", "euw");

var_dump($factory->newStaticDataApiQuery()->withChampData("blurb")->listChampions());