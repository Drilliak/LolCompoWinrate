<?php
 require './model/Autoload.php';

$builder = new DefaultApiUrlBuilder("getRecentGames", "308fdabd-0365-4103-b5ec-e8e965db5515");
echo $builder->withSummonerId(29563141)->buildUrl();
