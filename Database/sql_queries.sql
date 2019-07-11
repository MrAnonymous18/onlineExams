/*User table creation*/
CREATE TABLE `prepared`.`users` ( `id` INT(10) NOT NULL , `name` VARCHAR(50) NOT NULL , `contact` VARCHAR(10) NOT NULL ,
`date_of_birth` DATE NOT NULL , `gender` VARCHAR(1) NOT NULL , `address` VARCHAR(250) NOT NULL , `qualification` VARCHAR(250) NOT NULL ,
`avatar` VARCHAR(250) NOT NULL , `created_at` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

/* Login table creation */
CREATE TABLE `prepared`.`login` ( `id` INT(10) NOT NULL , `email` VARCHAR(60) NOT NULL , `password` VARCHAR(20) NOT NULL ,
`role` VARCHAR(10) NOT NULL , `status` VARCHAR(10) NOT NULL ) ENGINE = InnoDB;

/*Quetion table*/
CREATE TABLE `prepared`.`questions` ( `id` INT(12) NOT NULL AUTO_INCREMENT , `type` VARCHAR(50) NOT NULL , `question` VARCHAR(500) NOT NULL ,
`option_a` VARCHAR(100) NOT NULL , `option_b` VARCHAR(100) NOT NULL , `option_c` VARCHAR(100) NOT NULL , `option_d` VARCHAR(100) NOT NULL ,
`answer` VARCHAR(100) NOT NULL , `created_at` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;