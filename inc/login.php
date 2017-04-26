<!--Login-PHP (Session starten, DB Verbindung, Benutzereingaben prüfen) -->
<?php
echo session_id();
//DB-Verbindung
include "inc/database_connection.php";

//Variablen
$input = $email = $password = "";
$input_error = $email_error = $password_error = "";
$_SESSION['auth'] = false; 
//Funktion: Eingabe formatieren
function format($input){
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"] || !filter_var($email, FILTER_VALIDATE_EMAIL) )) {
     $email_error = "Bitte geben Sie eine gültige Email-Adresse ein.";
   } else {
     $email = format($_POST["email"]);
     }
  //Password prüfen
if ( empty($_POST["password"])){
    $password_error = "Bitten geben Sie ihr Passwort ein.";
} else {
    $password = format($_POST["password"]);
    //$password_error = "Passwort inkorrekt.";
    }

//DB Abfrage
$sql = "SELECT user_id, vorname, email, pwd FROM user where email='" .$_POST["email"]. "'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
echo $count;
if ($count > 0) {
    $row = mysql_fetch_row($result);
    $_SESSION['session_id'] = session_id();
    $_SESSION['auth'] = true;
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['vorname'] = $row['vorname'];
    $_SESSION['email'] = $row['email'];
    echo "Hallo " . $_SESSION['vorname'] . ", dein Login war erfolgreich";
    header("Location: index.php");
  } else {
    echo "Hoppla, leider hat deine Anmeldung nicht funktioniert.";
  }
}



?>
<!--Login-Formular -->
<div class="intro">
  <h1>Login</h1>
</div>
<div class="main">
<div class="overview">
<div class="login-box">
  <!--<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>-->
<form action="" method="post">
  <input type="email" name="email" placeholder="E-Mail Adresse" required><br/>
  <?php if(isset($email_error))echo "<span><p>" . $email_error . "</p></span><br/>";?>
  <input type="password" name="passwort" placeholder="Passwort" required><br/>
  <?php if(isset($password_error))echo "<p>" . $password_error . "</p>";?>
  <input class="Einloggen." type="Submit" name="" value="Jetzt einloggen." />
</form>
<p>Neu bei uns? <a style="color: darkblue;" href="index.php?section=register">Hier</a> geht es zur Registrierung.</p>
</div>
</div>
</div>


<!---------------------------------------------------------------------------------->
