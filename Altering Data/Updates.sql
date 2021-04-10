--UPDATE ACCOUNTS TO HAVE ID BE 20 INTS:



--FRONT END HAS AUTO-ID MAKER AT LEN. (20), Do we need auto-increment ID in DB?
--ID may be random otherwise. Having Sahar and Pascual make a function:
--MAKE ID //length 20
--WHILE(ID - Exists to another ID in DB)
--IF(ID Exists)
--CREATE NEW.ID
--Push(ID)
--//Queries DB to see if the rand ID exists already in DB. If the ID DOES exist, make a new rand(20) ID.
--If the ID exists again, do again, else push ID.

--CHECK TO SEE IF DATA EXISTS LOOKS LIKE:--
/*
$result = mysql_query('SELECT COUNT(*) FROM `table` WHERE `field` = ...');
if (!$result) {
    die(mysql_error());
}
if (mysql_result($result, 0, 0) > 0) {
    // some data matched
} else {
    // no data matched
}
*/

--BOOL in DB to see if car has been registered to ALK site.
--BOOL in DB to verify if eMAIL has been registered to ALK-SITE.

---GO over with Gustavo on DB logic.


-------------
--Added "Zest" data column in Users and Accounts to hold the salt values from front end.