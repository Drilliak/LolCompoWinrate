<?php
 require './model/Autoload.php';

$db  = DbFactory::getConnection();

$manager = new GameApiManager(29563141);

$manager->getParticipants();