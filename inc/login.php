<!--Login-PHP (Session starten, DB Verbindung, Benutzereingaben prüfen) -->
<?php
echo session_id();
//DB-Verbindung
include "inc/database_connection.php";



//Variablen
$input = $email = $password = "";
$input_error = $email_error = $password_error = "";

//Funktion: Eingabe formatieren
function format($input){
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}
//$_SERVER["REQUEST_METHOD"] == "POST"
if (isset ($_POST['submit']) || $_SERVER["REQUEST_METHOD"] == "POST" ) {
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
     $email_error = "Bitte geben Sie eine gültige Email-Adresse ein.";
     echo $email_error;
   } else {

//DB Abfrage
$sql = "SELECT user_id, vorname, email, pwd FROM user WHERE email='" .$email. "' AND pwd='" . $password ."' LIMIT 1";
echo $sql;

$result = mysqli_query($conn, $sql);
if ($result === false){
  echo "Query NOT successful.";
} else {
  echo "Query successful";
}

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)){
    $_SESSION['session_id'] = session_id();
    $_SESSION['auth'] = true;
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['vorname'] = $row['vorname'];
    $_SESSION['email'] = $row['email'];
  }
    header("Location: index.php?section=profile");
  } else {
    echo "Hoppla, leider hat deine Anmeldung nicht funktioniert.";
  }}
} else {
  echo "Bitte geben Sie ihre E-Mail-Adresse und ihr Passwort ein!";
}
}
?>
<!--Login-Formular -->
<div class="jumbotron bg-home banner-bot-border">
    <h1>Login.</h1>
</div>
<div class="container container-padding">
<div class="panel panel-default login-panel">
  <div class="panel-heading">Login</div>
<div class="panel-body">
<form class="form-horizontal" action="" method="post">
  <div class="form-group">
  <label>E-Mail Adresse</label>
  <div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail Adresse" required>
  </div>
</div>
  <?php if(isset($email_error))echo "<span><p>" . $email_error . "</p></span><br/>";?>
  <div class="form-group">
  <label>Passwort</label>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input type="password" class="form-control" name="password" id="password" placeholder="Passwort" required>
</div>
</div>
  <?php if(isset($password_error))echo "<p>" . $password_error . "</p>";?>
  <div class="checkbox"
  <label><input type="checkbox">Anmeldedaten merken</label>
</div>
  <input class="btn btn-default" type="Submit" id ="submit" name="submit" value="Jetzt einloggen." />
</form>
</div>
<div class="panel-footer">
<p>Neu bei uns? <a style="color: darkblue;" href="index.php?section=register">Hier</a> geht es zur Registrierung.</p>
</div>
</div>
</div>


<!---------------------------------------------------------------------------------->
