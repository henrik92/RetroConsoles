<!--Login-PHP (Session starten, DB Verbindung, Benutzereingaben prüfen) -->
<?php
session_start();
include 'inc/database_connection.php';
//Nach Email-Adresse in DB suchen

$sql = "SELECT name FROM user where userid='2'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row["name"]. "<br>";
    }
} else {
  echo "0 results";
}
?>
<!--Login-Formular -->
<div class="intro">
  <h1>Login</h1>
</div>
<div class="main">
  <div class="overview">
<form action="index.html" method="post">
  <input type="email" name="Email" placeholder="E-Mail Adresse"/>
  <input type="password" name="Passwort" placeholder="Passwort" />
  <input class="Einloggen." type="Submit" name="" value="Abschicken" />
</form>
<p>Nachname: <?php $row["name"] ?></p>
</div>
</div>
