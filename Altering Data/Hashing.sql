--To hash stored passwords in the pre-existing table--
--First: Update password len to the needed 32 bit reg for SHA2 hashing.

ALTER TABLE Accounts MODIFY password VARCHAR(224);

--Next use: 
UPDATE Accounts SET password = SHA2(password, 224);
--SHOULD SET password to SHA2 hash and allow for later comparison.

--Show update.

SELECT * FROM Accounts;

--Success, all passwords are now hashed.

--Does it always hash a new password?  No...
--Change the type of Password in Accounts to be a password hashed into SHA2.

--UPDATE `thistable` SET `thistable`.`column1` = `md5`
--WHERE `thistable`.`column1` = `currentvalue` 

--UPDATE Accounts SET password = md5(password);

Update Accounts set password = SHA2(password, 224);

--Success!!  The SHOW FIELDS shows that password type is now varchar32 and will be hashed in md5 automatically. 

--Show warnings;


--The first SHA2 depicted all passwords to NULL. Must update the passwords ID: 1-50
--to a new password.

--See: pass_update.sql

-------

--Done and done.  Alter front end to use SHA2 function upon entering data to database.