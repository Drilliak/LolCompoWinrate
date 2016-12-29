<?php
 require './model/Autoload.php';

$startingId = 53668796;


$factory = RiotApiQueryFactory::newInstance("308fdabd-0365-4103-b5ec-e8e965db5515", "euw");

RiotApiQueryFactory::wait();
$summoners = $factory->newStaticDataApiQuery()->withChampData('all')->listChampions();

var_dump($summoners);


