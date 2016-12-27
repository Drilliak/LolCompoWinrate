<?php
 require './model/Autoload.php';




$factory = RiotApiQueryFactory::newInstance("308fdabd-0365-4103-b5ec-e8e965db5515", "euw");


for ($i = 0 ; $i<15 ; $i++){
    $factory::wait();
    var_dump($factory->newSummonerApiQuery()->withSummonerName("Drilliak")->summonersList());
}


