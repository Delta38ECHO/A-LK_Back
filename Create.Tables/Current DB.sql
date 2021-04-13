CREATE TABLE Cars(
  Car_ID INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  User_ID VARCHAR(20) NOT NULL,
  CarMake VARCHAR(10) NOT NULL,
  CarModel VARCHAR(10) NOT NULL,
  CarYear VARCHAR(10) NOT NULL,
  LicencePlate VARCHAR(20) NOT NULL,
  CarImage VARCHAR(10),
  FOREIGN KEY (User_ID) REFERENCES Users (User_ID)
);

CREATE TABLE Users(
  User_ID VARCHAR(20) NOT NULL PRIMARY KEY,
  Fname VARCHAR(20) NOT NULL,
  Lname VARCHAR(20) NOT NULL,
  Email VARCHAR(40) NOT NULL,
  Password VARCHAR(270) NOT NULL,
  Zest VARCHAR(15) NOT NULL,
  Authority INT(4) NOT NULL
)
Engine=MyISAM;

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

--Doesn't work, try again.
/*
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
);  */

--Use this one:

CREATE TABLE u_Access
( Access_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Master_ID INT UNSIGNED NOT NULL,
  Slave_ID INT UNSIGNED NOT NULL,
  Mas_Car_ID INT UNSIGNED NOT NULL,
  Acc_op INT(1) NOT NULL,
  FOREIGN KEY (Master_ID) REFERENCES Users (User_ID),
  FOREIGN KEY (Slave_ID) REFERENCES Users (User_ID),
  FOREIGN KEY (Mas_Car_ID) REFERENCES Cars (Car_ID)
)Engine=MyISAM;

CREATE TABLE Logs( 
  Log_ID INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Log_TS TIMESTAMP,
  User_ID VARCHAR(20) NOT NULL,
  Car_ID INT UNSIGNED NOT NULL,
  FOREIGN KEY (User_ID) REFERENCES Users (User_ID),
  FOREIGN KEY (Car_ID) REFERENCES Cars (Car_ID)
)Engine=MyISAM;

/*

	For the working parts of the DB:
		.User is the leading table. When a new account is made, it is stored in the User table.
		.When the User wants to allow another user to have access to their vehicle, the user uses the front end to 
			allow another user access:
		.The above is ref. via the DB by the following:
			u_Access works by having a listing_ID DENOTED BY THE Access_ID
				.Access_ID works for one scenario only and multiple access users will need to have
					multiple Access_ID volumes using the same Master_ID.
				.u_Access incorporates the CAR the Master wants to allow to be used. This is done via the Car_ID 
					denoted by the Mas_Car_ID attribute. 
		
		.When a user wants to make an account with 2+ cars, there will be 2 rows in table Cars with different Car_IDs and 1 repeating User_ID associated with those cars.
		
		.Logs is simple. So long as a user has access to a car, their associated User_ID will be listed in the User_ID attribute along with the accessed car via Car_ID; 
*/