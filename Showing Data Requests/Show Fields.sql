--Shows fields in (specified) tables. Useful for seeing data types and alike.--

--SHOW FIELDS FROM tablename;--
/* returns "Field", "Type", "Null", "Key", "Default", "Extras" */

--EX:

SHOW FIELDS FROM Accounts;

--Alternatively, you can use:
--DESCRIBE table_name;