<?php
/* LOKAL
$server = "localhost";
$login = "root";
$password = "";
$db_name = "retrokonsolen";
*/
// JADE HS
$server = "eum4.kurs.jade-hs.de";
$login = "eum4";
$password = "MNkJ0oCn";
$db_name = "eum4";
// Create connection
$conn = mysqli_connect( $server, $login, $password, $db_name) or die( 'Verbindungsfehler!' );

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connected successfully";
}
?>
