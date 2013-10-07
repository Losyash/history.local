DROP DATABASE IF EXISTS `history`;
 
CREATE DATABASE `history` DEFAULT CHARACTER SET utf8;

DROP TABLE IF EXISTS `history`.`wd_graduates`;
CREATE TABLE `history`.`wd_graduates` (
  `wd_graduate_id` INT NOT NULL AUTO_INCREMENT,
  `wd_graduate_firstname` VARCHAR(45) NULL,
  `wd_graduate_patronymic` VARCHAR(45) NULL,
  `wd_graduate_lastname` VARCHAR(45) NULL,
  `wd_graduate_year` YEAR NULL,
  `wd_graduate_level` VARCHAR(45) NULL,
  `wd_graduate_speciality` VARCHAR(255) NULL,
  `wd_graduate_workplace` VARCHAR(255) NULL,
  `wd_graduate_post` VARCHAR(255) NULL,
  `wd_graduate_telephone` VARCHAR(45) NULL,
  `wd_graduate_email` VARCHAR(45) NULL,
  PRIMARY KEY (`wd_graduate_id`))
  ENGINE=InnoDB DEFAULT CHARSET=utf8;