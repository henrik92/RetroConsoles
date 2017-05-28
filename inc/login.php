<?php $_SESSION['page'] = "login"; ?>
<!--Login-PHP (Session starten, DB Verbindung, Benutzereingaben prüfen) -->
<?php
//DB-Verbindung
include "inc/database_connection.php";

//Variablen
$input = $email = $password = "";
$error_msg = $login_msg = "";

//Funktion: Eingabe formatieren
function format($input){
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}
//$_SERVER["REQUEST_METHOD"] == "POST"
if (isset ($_POST['anmelden']) || $_SERVER["REQUEST_METHOD"] == "POST" ) {
  if(isset($_POST['email']) && isset($_POST['password'])){

session_start();
include 'inc/database_connection.php';

//Formvalidation

//Nach Email-Adresse in DB suchen
$sql = "SELECT name FROM user where userid='2'";
$result = $conn->query($sql);

    $email = format($_POST['email']);
    $password = format($_POST['password']);

if(!filter_var($email, FILTER_VALIDATE_EMAIL) === true ) {
     $error_msg = "Bitte geben Sie eine gültige Email-Adresse ein.";
   } else {
//DB Abfrage
$sql = "SELECT * FROM user WHERE email='" .$email. "' AND pwd='" . $password ."' LIMIT 1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)){
    $_SESSION['session_id'] = session_id();
    $_SESSION['login'] = true;

    if ($row['gender']==="m") {
    $_SESSION['gender'] = "Herr";
    }
  if ($row['gender']==="w"){
    $_SESSION['gender'] = "Frau";
    }

    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['vorname'] = $row['vorname'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['street'] = $row['street'];
    $_SESSION['streetnr'] = $row['streetnr'];
    $_SESSION['postcode'] = $row['post'];
    $_SESSION['city'] = $row['city'];
    $_SESSION['regdate'] = $row['reg_date'];
    $login_msg = "Login erfolgreich!";
  }
    header("Location: index.php?section=profile");
  } else {
    $error_msg = "Hoppla, wir haben keine Email-Adresse oder Passworteinstimmung gefunden.";
  }}
} else {
  $error_msg = "Bitte geben Sie ihre E-Mail-Adresse und ihr Passwort ein!";
}
}
?>
<!--Login-Formular -->

<div class="container first-padding bg-black">
<h2>Login</h2>
<br><br>
<div class="panel-body bg-black">
<form action="" method="post">
  <ul>
  <li><h5>E-Mail Adresse</h5></li>
  <li>  <input type="email" name="email" id="email" placeholder="E-Mail Adresse eingeben" required></li>
  <li><br><br></li>
  <li>  <h5>Passwort</h5></li>
  <li><input type="password" name="password" id="password" placeholder="Passwort eingeben" required></li>
  <li><br></li>
  <li><?php if($error_msg !== "" || $login_msg !== "") echo '<p class="bg-danger">' . $error_msg . '</p>';?></li>
</ul>
<br>
  <input style="width:50%;"class="btn btn-success" type="Submit" id ="submit" name="anmelden" value="Jetzt einloggen." />
<br>
</form>
<br>
<h5>Neu bei uns? <a href="index.php?section=register">Hier</a> geht es zur Registrierung.</h5>
</div>
</div>
</div>
</div>


<!---------------------------------------------------------------------------------->
