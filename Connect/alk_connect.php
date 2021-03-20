<?php
	//conect_to_database
$server = 'bender.cs.csubak.edu';
$user = 'noay';
$password = 'ALK4321!';
$database = 'alk';
$db = new mysqli($server, $user, $password, $database);
// oop   $obj->member
 if($db->connect_error) {
     exit("Error 501");
 }
 else {
     // DEVELOPMENT
     echo "Success<br>";
}

//Bring up a connection to the server for ALK only. This is to test connectivity.

?>