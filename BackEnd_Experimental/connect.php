<?php
//conect_to_database
$server = 'localhost';
$user = 'name';
$password = 'password';
$database = 'db-name';
$db = new mysqli($server, $user, $password, $database);
// oop   $obj->member
/* if($db->connect_error) {
     exit("Error 501\");
 }
 else {
     // DEVELOPMENT
    // echo "Success<br>";
}
//GLOBAL_VAR $db

*/
?>