/*  OLD NEWS

--This creates the database.
CREATE DATABASE antiLockout;

--This creates the table for Images.  #Filled Images
CREATE TABLE Images
( Image_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  User_ID INT UNSIGNED NOT NULL,
  Account_ID INT UNSIGNED NOT NULL, 
  FOREIGN KEY (User_ID) REFERENCES Users (User_ID),
  FOREIGN KEY (Account_ID) REFERENCES Accounts (Account_ID)
);

--This create table for Users.#FILLED USERS.
CREATE TABLE Users 
( User_ID INT UNSIGNED Auto_INCREMENT NOT NULL Primary KEY,
  Account_ID INT UNSIGNED NOT NULL, 
  fName VARCHAR(20) NOT NULL,
  lName VARCHAR(20) NOT NULL,
  email VARCHAR(40) NOT NULL,
  password VARCHAR(270) NOT NULL,
  zest VARCHAR(15) NOT NULL,
  Authority INT(1),
  FOREIGN KEY (Account_ID) REFERENCES Accounts (Account_ID)
);  

--This create table for Accounts.   //Filled ACCOUNTS
CREATE TABLE Accounts 
( Account_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Rasp_ID INT(10) NOT NULL,
  fName VARCHAR(20) NOT NULL,
  lName VARCHAR(20) NOT NULL,
  cName VARCHAR(20) NOT NULL,
  email VARCHAR(40) NOT NULL,
  password VARCHAR(270) NOT NULL,
  zest VARCHAR(15) NOT NULL
);

--This creates table for logs.  #Filled LOGS
CREATE TABLE Logs
( Log_ID INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Log_TS TIMESTAMP,
  User_ID INT UNSIGNED NOT NULL,
  Car_ID INT UNSIGNED NOT NULL,
  Account_ID INT UNSIGNED NOT NULL,
  FOREIGN KEY (User_ID) REFERENCES Users (User_ID),
  FOREIGN KEY (Car_ID) REFERENCES Cars (Car_ID),
  FOREIGN KEY (Account_ID) REFERENCES Accounts (Account_ID)
);
--This creates table for cars.   #FILLED CARS
CREATE TABLE Cars
( Car_ID INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  CarMake VARCHAR(10) NOT NULL,
  CarModel VARCHAR(10) NOT NULL,
  CarYear VARCHAR(10) NOT NULL,
  LicencePlate VARCHAR(10) NOT NULL,
  CarImage VARCHAR(10)
);

*/