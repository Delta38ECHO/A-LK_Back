<?php
//

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//
//conect_to_database
$server = 'bender.cs.csubak.edu';
$user = 'noay';
$password = 'ALK4321!';
$database = 'alk';
$db = mysqli($server, $user, $password, $database)
or die('Error connecting to MySQL server.');

//Bring up a connection to the server for ALK only. This is to test connectivity.
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>
 
 <?php
//Step2
$query = "SELECT * FROM Accounts";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['Account_ID'] . ' ' . $row['Rasp_ID'] . ' ' . $row['fName'] . ' ' . $row['lName'] . ' ' .$row['cName'] . ' ' .  $row['email'] . ' ' . $row['password'] .'<br />';
}
?>

</body>
</html>