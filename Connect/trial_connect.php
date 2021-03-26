<?php
//To connect to DATABASE from FRONT-END -- Works with pascual on this.
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'alk');
define('DB_PASSWORD', 'Thisisasecurepassword123!');
define('DB_NAME', 'alk');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

/*
Username is ALK as well as the database name. Noay is not the username LIKE WE USE TO THE DB login... 
*/

?>
