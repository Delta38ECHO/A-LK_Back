--pass_update.sql--

TRUNCATE TABLE Accounts; --FK Constraints are alive. Disable them and then run this.  
		
SET FOREIGN_KEY_CHECKS=0; --Off

SET FOREIGN_KEY_CHECKS=1; --On
		
--Then add the data back into table.  

--Turn on FK constraints again.

--Use Hashing.sql again to make passwords into SHA2.

---Also note that the:

--SHOW TABLES;

--command is a good way of showing all existing tables in the DB.