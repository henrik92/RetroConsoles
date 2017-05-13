<?php

$server = "localhost";
$login = "root";
$password = "";
$db_name = "retrokonsolen";

/* JADE HS
$server = "eum4.kurs.jade-hs.de";
$login = "eum4";
$password = "MNkJ0oCn";
$db_name = "eum4"; */
// Create connection
$conn = mysqli_connect( $server, $login, $password, $db_name) or die( 'Verbindungsfehler!' );
$utf = "SET NAMES 'UTF-8'";
if ($conn->query($utf) === true){
  echo "UTF8 Encoding aktiv";
} else {
  echo "Encoding hat nicht funktioniert";
}
// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connected successfully";
}
?>
