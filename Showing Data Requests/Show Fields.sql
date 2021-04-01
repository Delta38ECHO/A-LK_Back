--Shows fields in (specified) tables. Useful for seeing data types and alike.--

--SHOW FIELDS FROM tablename;--
/* returns "Field", "Type", "Null", "Key", "Default", "Extras" */

--EX:

SHOW FIELDS FROM Accounts;

--Alternatively, you can use:
--DESCRIBE table_name;

Altering datatypes:
--ALTER TABLE table_name MODIFY COLUMN column_name datatype; 

ALTER TABLE Accounts MODIFY COLUMN password varchar(270);

ALTER TABLE Users MODIFY COLUMN password varchar(270);

--ALTER TABLE table_name ADD column_name datatype; 

ALTER TABLE Users ADD Zest varchar(15);

ALTER TABLE Accounts ADD Zest varchar(15);
