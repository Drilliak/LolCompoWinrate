<?php
 require './model/Autoload.php';

 $provider = new RiotApiProvider();
$builder = $provider->createApiUrlBuilder("getChampions", "308fdabd-0365-4103-b5ec-e8e965db5515");
echo $builder->withChampData("all")->withDataById()->withLocale("en_US")->buildUrl();
