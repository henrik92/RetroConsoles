
<div class="container first-padding bg-black">
  <h2>Registrierung</h2>
  <br><br>
  <ul >
    <form action="" method="post">
      <li><h5>E-Mail-Adresse</h5></li>
      <li><input placeholder="Email-Adresse"id="plz" type="text" name="mail" required/></li>
      <li><input placeholder="E-Mail-Adresse wiederholen"id="plz" type="text" name="mail_c" required/></li>
      <li><br><br></li>
        <li><h5>Passwort</h5></li>
      <li><input placeholder="Passwort"id="plz" type="password" name="pwd" required /></li>
      <li><input placeholder="Passwort wiederholen"id="plz" type="password" name="pwd_c" required/></li>
      <li><br><br>
        <li><h5>Persönliche Angaben</h5></li>
        <li><select id="gender" type="text" name="gender" required>
        <option value="hide">Anrede auswählen </option>
        <option value="m">Herr</option>
        <option value="w">Frau</option>
        </li>
        <br>
        <li><input placeholder="Vorname"id="plz" type="text" name="vorname" required/></li>
        <li><input placeholder="Nachname"id="plz" type="text" name="nachname" required/></li>
        <li><input placeholder="Straßenname"id="plz" type="text" name="straße" required/></li>
        <li><input placeholder="Hausnummer"id="plz" type="text" name="hausnr" required/></li>
        <li><input placeholder="Postleitzahl"id="plz" type="text" name="plz" required/></li>
        <li><input placeholder="Stadt"id="plz" type="text" name="city" required/></li>
        <br><br>
  </ul>
<button name="register" style="width:40%;"class="btn btn-success font-white">Jetzt registrieren.</button>
</form>
<br><br>
<h5>Du besitzt bereits einen Account? <a href="index.php?section=login">Hier</a> geht es zur Anmeldung.</h5>

</div>

<?php
@session_start();
include "inc/database_connection.php";

if (isset($_POST['register'])) {
  // $stmt = $conn->prepare("INSERT INTO user (gender, name, lastname, streetname, hausnr,plz,ort, email,pwd) VALUES (?, ?, ?)");
  // $stmt->bind_param("ssssiisss", $gender, $vorname, $nachname, $straße, $hausnr, $plz, $city, $mail, $pwd);


if ($_POST['mail'] !== $_POST['mail_c'] ){
  echo "E-Mail Adressen stimmen nicht überein";
} else if ($_POST['pwd'] !== $_POST['pwd_c']){
    echo "Passwörter stimmen nicht überein";
} else {
  $mail = $_POST['mail'];
  $mail_c = $_POST['mail_c'];
  $pwd = $_POST['pwd'];
  $pwd_c = $_POST['pwd_c'];

if (isset($_POST['gender']) && $_POST['gender'] !== "hide"){
  if ($_POST['gender']==="m"){
      $gender = "Herr";
    }
  if ($_POST['gender']==="w"){
      $gender = "Frau";
    }} else {
      echo "Bitte Anrede auswählen";
    }

if (isset($_POST['vorname'])){
$vorname = $_POST['vorname'];
} else {
  echo "Bitte Vorname angeben";
}

if (isset($_POST['nachname'])){
$nachname = $_POST['nachname'];
} else {
    echo "Bitte Nachname angeben";
}

if (isset($_POST['straße'])){
$straße = $_POST['straße'];
} else {
    echo "Bitte Straßenname angeben";
}

if (isset($_POST['hausnr'])){
$hausnr = $_POST['hausnr'];
} else {
    echo "Bitte Hausnummer angeben";
}

if (isset($_POST['plz'])){
$plz = $_POST['plz'];
} else {
    echo "Bitte Postleitzahl angeben";
}

if (isset($_POST['city'])){
$city = $_POST['city'];
} else {
    echo "Bitte Stadt angeben";
}

$sql = "SELECT * FROM user WHERE email='" .$mail. "' LIMIT 1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 echo "Es exisitiert bereits ein Benutzer mit der angegebenen Email-Adresse";
} else {
  echo "Registrierung erfolgreich";
}
}
}
