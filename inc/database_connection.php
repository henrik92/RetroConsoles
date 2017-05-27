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

//UTF-8 Enkodierung
$utf = mysqli_set_charset($conn, 'utf8');
if ($utf === false){
  echo "MySQL: UTF-8 Encoding hat nicht funktioniert";
}

// Check connection
if ($conn->connect_error) {
    echo "DB-Connection failed: " . $conn->connect_error;
}
?>
