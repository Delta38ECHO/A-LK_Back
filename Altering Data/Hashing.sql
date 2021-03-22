--To hash stored passwords in the pre-existing table--
--First: Update password len to the needed 32 bit reg for MD5 hashing.

ALTER TABLE Accounts MODIFY password VARCHAR(32);

--Next use: 
UPDATE Accounts SET password = MD5(password);
--SHOULD SET password to MD5 hash and allow for later comparison.

--Show update.

SELECT * FROM Accounts;

--Success, all passwords are now hashed.

--Does it always hash a new password?  No...
--Change the type of Password in Accounts to be a password hashed into MD5.

--UPDATE `thistable` SET `thistable`.`column1` = `md5`
--WHERE `thistable`.`column1` = `currentvalue` 

UPDATE Accounts SET password = md5(password);
--Success!!  The SHOW FIELDS shows that password type is now varchar32 and will be hashed in md5 automatically. 