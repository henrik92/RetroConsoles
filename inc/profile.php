<?php $_SESSION['page'] = "profile";
if (!isset($_SESSION['vorname'])){
  header("Location: index.php?section=home");
}
include 'inc/database_connection.php';

?>
<div class="container first-padding bg-black">
<h2>Willkommen zurück <?php echo $_SESSION['vorname'] ?> ! </h2>
</div>

<div class="container bg-black">
  <div class="panel panel-default bg-black">
    <div class="panel-heading bg-black">
      <strong>Accountfunktionen</strong>
    </div>
    <div class="panel-body bg-black font-black text-left">
      <div class="row">
        <div class="col-sm-4">
          <ul>
      <li><a href="index.php?section=repair">Reperaturauftrag erstellen</a></li><br>
      <li><a href="index.php?section=shop">Warenkorb ansehen</a></li><br>
      <li><a href="index.php?section=aboutus">Zum Kontakformular</a></li>
    </ul>
</div>
      <div class="col-sm-4">
        <ul>
  <li>  <a href=""data-toggle="modal" data-target="#edit_account">Benutzerdaten ändern</a> </li><br>
  <li>  <a href=""data-toggle="modal" data-target="#edit_mail">E-Mail Adresse ändern</a> </li><br>
  <li>  <a href=""data-toggle="modal" data-target="#edit_pwd">Passwort ändern</a> </li>
</ul>
      <br>
</div>
      <div class="col-sm-4">
    <a href=""data-toggle="modal" data-target="#delete_account">Account löschen</a>>
    </div>
  </div>
  </div>
</div>
</div>
<!-- MODALS -->
<div id="delete_account" class="modal fade" role="dialog">
  <div class="modal-dialog bg-black font-white">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Account löschen</h4>
      </div>
      <div class="modal-body">
        <p>Willst du uns wirklich verlassen?</p>
        <form method="post" action="">
        <button type="button" class="btn btn-default" data-dismiss="modal">Nein</button>
        <button name="delete" type="button" class="btn btn-success" data-dismiss="modal">Ja</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
      </div>
    </div>
  </div>
</div>

<div id="edit_mail" class="modal fade" role="dialog">
  <div class="modal-dialog bg-black font-white">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Email-Adresse ändern</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="">
              <ul>
              <li><h6>Alte Email</h6></li>
              <li><input placeholder="Alte Email-Adresse eingeben"id="plz" type="text" name="mail_o" required/></li>
              <li><br></li>
              <li><h6>Neue Email</h6></li>
              <li><input placeholder="Neue Email-Adresse eingeben"id="plz" type="text" name="mail" required/></li>
              <li><input placeholder="Neue Email-Adresse bestätigen"id="plz" type="text" name="mail_c" required/></li>
              <li><br></li>
            </ul>
            <button name="edit_email" type="submit" class="btn btn-success">Ändern</button>
      </form>
      <?php if(isset($_POST['edit_mail'])) {
        if(isset($_POST['mail_o']) && ($_POST['mail_o'] !== $_SESSION['email'])) {
          echo 'Falsche Angabe für alte Email-Adresse';
        } else {
          if($_POST['mail'] !== $_POST['mail_c']){
            echo 'Neues Passwort stimmt nicht überein.';
          } else {
          echo 'Änderung erfolgreich';
        }
        }
      }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
      </div>
    </div>
  </div>
</div>

<div id="edit_pwd" class="modal fade" role="dialog">
  <div class="modal-dialog bg-black font-white">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Passwort ändern</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="">
              <ul>
              <li><h6>Altes Passwort</h6></li>
              <li><input placeholder="Altes Passwort eingeben"id="plz" type="text" name="pw_o" required/></li>
              <li><br></li>
              <li><h6>Neues Passwort</h6></li>
              <li><input placeholder="Neues Passwort eingeben"id="plz" type="text" name="pw" required/></li>
              <li><input placeholder="Neues Passwort bestätigen"id="plz" type="text" name="pw_c" required/></li>
              <li><br></li>
            </ul>
            <button name="edit_pw" class="btn btn-success">Ändern</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
      </div>
    </div>
  </div>
</div>

<div id="edit_account" class="modal fade" role="dialog">
  <div class="modal-dialog bg-black font-white">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Benutzerdaten ändern</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="">
              <ul>
                <li><h6>- Mache eine Eingabe in das Feld dessen Daten du ändern möchtest -</h6></li>
                <li><input placeholder="Vorname"id="plz" type="text" name="vorname"/></li>
                <li><input placeholder="Nachname"id="plz" type="text" name="nachname"/></li>
                <li><input placeholder="Straßenname"id="plz" type="text" name="straße"/></li>
                <li><input placeholder="Hausnummer"id="plz" type="text" name="hausnr"/></li>
                <li><input placeholder="Postleitzahl"id="plz" type="text" name="plz"/></li>
                <li><input placeholder="Stadt"id="plz" type="text" name="city"/></li>
            </ul>
            <button name="edit_acc" class="btn btn-success">Ändern</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
      </div>
    </div>
  </div>
</div>
<!--++++++++++++++++++++++--->
  <div class="container bg-black">
        <div class="panel panel-default bg-black">
          <div class="panel-heading bg-black">
              <strong>Persönliche Informationen</strong>
          </div>
          <div class="panel-body bg-black">

            <div class="row">
              <div class="col-sm-6">
          <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
              <th>Zur Person</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kundennummer:</td>
              <td><?php echo $_SESSION['user_id']?></td>
              <tr>
            <tr><td>Anrede:</td>
                <td><?php echo $_SESSION['gender']?></td>
              <tr>
            <tr><td>Vorname:</td>
    <td><?php echo $_SESSION['vorname']?></td>
              <tr>
            <tr><td>Nachname:</td>
    <td><?php echo $_SESSION['name']?></td>
  </tr>
            <tr><td>E-Mail-Adresse:</td>
    <td><?php echo $_SESSION['email']?></td>
  </tr>

            <tr><td>Mitglied seit:</td>
      <td><?php echo $_SESSION['regdate']?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-sm-6">
      <table class="table table-responsive bg-black">
        <thead>
          <tr>
          <th>Anschrift</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <tr><td>Straße:</td>
    <td><?php echo $_SESSION['street'] ?></td>
          </tr>
          <tr><td>Hausnummer:</td>
    <td><?php echo $_SESSION['streetnr'] ?></td>
          </tr>
          <tr><td>Postleitzahl:</td>
    <td><?php echo $_SESSION['postcode'] ?></td>
          </tr>
          <tr><td>Stadt:</td>
    <td><?php echo $_SESSION['city'] ?></td>
          </tr>
      </tbody>
    </table>
    </div>
</div>
  </div>
  </div>
</div>

<div class="container bg-black ">
<div class="panel panel-default bg-black">
    <div class="panel-heading bg-black"><b>Zahlungsinformationen</b></div>
    <div class="panel-body bg-black text-left>"
        <br>
        <ul class="text-left">
        <li><strong><u>Vorkasse</u></strong></li><br>
        <li>Kontoinhaber: OldKonsole</li><br>
        <li>Kontonummer: 123456789</li><br>
        <li>Bankleitzahl: 987654321</li><br>
        <li>Bankname: Musterbank</li><br>
        <li>BIC/SWIFT-Code: NOLADE2H</li><br>
        <li>IBAN-Code:DE987654321123456789</li><br>
      </ul>
  </div>
</div>
</div>
