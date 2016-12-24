<?php
 require './model/Autoload.php';

$manager = new GameApiManager(29563141);

var_dump($manager->getMatchIds());