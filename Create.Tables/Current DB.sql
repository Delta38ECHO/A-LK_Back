CREATE TABLE alk.Cars(
  Car_ID INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  User_ID VARCHAR(20) NOT NULL,
  CarMake VARCHAR(10) NOT NULL,
  CarModel VARCHAR(10) NOT NULL,
  CarYear VARCHAR(10) NOT NULL,
  LicencePlate VARCHAR(20) NOT NULL,
  CarImage VARCHAR(10),
  FOREIGN KEY (User_ID) REFERENCES Users (User_ID)
);

CREATE TABLE alk.Users(
  User_ID VARCHAR(20) NOT NULL PRIMARY KEY,
  Co_ID INT(25) NOT NULL,
  Fname VARCHAR(20) NOT NULL,
  Lname VARCHAR(20) NOT NULL,
  Email VARCHAR(40) NOT NULL,
  Password VARCHAR(270) NOT NULL,
  Zest VARCHAR(15) NOT NULL,
  Authority INT(4) NOT NULL,
);

/*
CREATE TABLE u_Access
( Access_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Master_ID VARCHAR(20) NOT NULL,
  Mas_Car_ID INT(20) UNSIGNED NOT NULL,
  Slave_ID VARCHAR(20) NOT NULL,
  Acc_op INT(1) NOT NULL,
  --FOREIGN KEY (User_ID) REFERENCES Users (User_ID)

  So this needs a revamp;  The table will be rebuilt to be co-cat. with Users table.
  Master uses primary User_ID to then ALLOW Slave to use Vehicle "Mas_Car_ID" owned by Master.
);

--Table: u_Access won't be used, use the new one below:
*/

CREATE TABLE alk.a_Access(
	Access_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Master_ID VARCHAR(20) NOT NULL,
	Mas_Car_ID INT(20) UNSIGNED NOT NULL,
	Slave_ID VARCHAR(20) NOT NULL,
	Acc_op INT(1) NOT NULL,
	INDEX 'Master_ID_key_idx' ('Master_ID' ASC),
	INDEX 'Mas_Car_ID_key_idx' ('Mas_Car_ID' ASC),
	INDEX 'Slave_ID_key_idx' ('Slave_ID' ASC),
	CONSTRAINT 'Master_ID_key' FOREIGN KEY ('Master_ID') REFERENCES `alk`.`Users` (`Co_ID`)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT 'Mas_Car_ID_key' FOREIGN KEY ('Mas_Car_ID') REFERENCES `alk`.`Cars` (`Car_ID`)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT 'Slave_ID_key' FOREIGN KEY ('Slave_ID') REFERENCES `alk`.`Users` (`User_ID`)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
);

CREATE TABLE alk.Logs( 
  Log_ID INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Log_TS TIMESTAMP,
  User_ID VARCHAR(20) NOT NULL,
  Car_ID INT UNSIGNED NOT NULL,
  FOREIGN KEY (User_ID) REFERENCES Users (User_ID),
  FOREIGN KEY (Car_ID) REFERENCES Cars (Car_ID)
);

/*

	For the working parts of the DB, the Co_ID NEEDS to be the grouping aspect of u_Access table. A user is created with their own Co_ID that then gives them the ability to link other users via their User_ID in table Users.
	
	This is then stored in a linked table known as u_Access where it stores the User_ID. There's a MASTER_ID Where the car owner/account owner is listed and then there's the SLAVE_ID Where Master allows slave to use vehicle owned by master. 
	
	Example:
	
CREATE TABLE `test`.`user` 
(	`iduser` INT NOT NULL,
	`username` VARCHAR(45) NULL,
	PRIMARY KEY (`iduser`)
);


CREATE TABLE `test`.`transfer` 
(	`transactionID` INT NOT NULL,
	`from_user` INT NULL,
	`to_user` INT NULL,
	`transfer_amount` FLOAT NULL,
	PRIMARY KEY (`transactionID`),
	INDEX `from_user_key_idx` (`from_user` ASC),
	INDEX `to_user_key_idx` (`to_user` ASC),
	CONSTRAINT `from_user_key`
	FOREIGN KEY (`from_user`)
	REFERENCES `test`.`user` (`iduser`)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT `to_user_key`
	FOREIGN KEY (`to_user`)
	REFERENCES `test`.`user` (`iduser`)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
);
*/