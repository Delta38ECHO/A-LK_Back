--To hash stored passwords in the pre-existing table--
--First: Update password len to the needed 32 bit reg for MD5 hashing.
--Next use: 
UPDATE Accounts SET password = MD5(password);