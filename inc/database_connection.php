<?php
$server = "localhost";
$login = "root";
$password = "";
$db_name = "retrokonsolen";
// Create connection
$conn = mysqli_connect( $server, $login, $password, $db_name) or die( 'Verbindungsfehler!' );

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connected successfully";
}
?>
