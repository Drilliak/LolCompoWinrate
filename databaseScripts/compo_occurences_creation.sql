CREATE TABLE `league_of_legends`.`compo_occurences`
( `adc` INT NOT NULL ,
  `support` INT NOT NULL ,
  `wins_occurences` INT NOT NULL DEFAULT '0' ,
  `looses_occurences` INT NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`adc`, `support`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;