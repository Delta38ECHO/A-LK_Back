--To hash stored passwords in the pre-existing table--
--First: Update password len to the needed 32 bit reg for MD5 hashing.

ALTER TABLE Accounts MODIFY password VARCHAR(32);

--Next use: 
UPDATE Accounts SET password = MD5(password);
--SHOULD SET password to MD5 hash and allow for later comparison.

--Show update.

SELECT * FROM Accounts;

--Success, all passwords are now hashed.
