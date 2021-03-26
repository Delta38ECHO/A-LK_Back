<?php
//To connect to DATABASE from FRONT-END -- Works with pascual on this.
define('DB_SERVER', 'bender.cs.csubak.edu');
define('DB_USERNAME', 'noay');
define('DB_PASSWORD', 'Thisisasecurepassword123!');
define('DB_NAME', 'alk');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
