<?php $_SESSION['page'] = "faq";
?>
<div class="container bg-black first-padding">
<h2>Wie können wir dir weiterhelfen?</h2>
<br>
  <div class="row">
    <div class="col-sm-4 text-center">
      <div class="well well-sm font-white bg-black">
        <br><br>
      <h4><strong>F.A.Q.</strong></h4><br>
      <h5>Du hast Fragen zu einer bestimmten Rubrik? In unserem F.A.Q.-Bereich werden sie sicher beantwortet</h5>
      <br><br>
    </div>
    </div>
    <div class="col-sm-4 text-center">
      <div class="well well-sm font-white bg-black">
        <br><br>
      <h4><strong>Handbücher und Anleitungen</strong></h4><br>
      <h5>Handbuch verloren oder schon geübter Bastler? Wir bieten Handbücher und Anleitungen für deine Konsole</h5>
      <br><br>
        </div>
    </div>
    <div class="col-sm-4 text-center">
      <div class="well well-sm font-white bg-black">
        <br><br>
      <h4><strong>Kontakt</strong></h4><br>
      <h5>Wir konnten dir noch nicht weiterhelfen? Dann kontaktiere uns direkt, wir freuen uns!</h5>
      <br><br>
        </div>
    </div>
  </div>
</div>
<br><br>
<div class="container bg-black">
<h2>F.A.Q</h2>
  <br><br>
<div class="row">
<div class="col-sm-4 text-right" style="border-right: 1px solid lightgrey;">
  <form method="post" action="">
    <!-- Kategorieauswahl -->
  <h5>Wähle eine Kategorie aus:</h5>

  <?php
   if(isset($_POST['search_cat'])&&$_POST['kategorie']!=="hide"){

     ?>
  <select  name="kategorie" style="width: 100%;" type="select">
    <option <?php if($_POST['kategorie']==="hide"){echo 'selected';} ?>value="hide">--Kategorie--</option>
    <option <?php if($_POST['kategorie']==="register"){echo 'selected';} ?> value="register">Registrierung</option>
    <option <?php if($_POST['kategorie']==="login"){echo 'selected';} ?>value="login">Anmeldung</option>
    <option <?php if($_POST['kategorie']==="repair"){echo 'selected';} ?>value="repair">Reparatur</option>
    <option <?php if($_POST['kategorie']==="shop"){echo 'selected';} ?>value="shop">Einkauf</option>
    <option <?php if($_POST['kategorie']==="delivery"){echo 'selected';} ?>value="delivery">Versand</option>
    <option <?php if($_POST['kategorie']==="account"){echo 'selected';} ?>value="account">Mein Profil</option>
  </select>

  <button name="search_cat"class="btn btn-success text-right" value="refresh">Aktualisieren</button>
  <br><?php if(isset($_POST['search_cat']) && $_POST['search_cat']!== "hide"){ echo 'Fragen aktualisiert.';}
 } else { ?>
    <select  name="kategorie" style="width: 100%;" type="select">
      <option value="hide">--Kategorie--</option>
      <option value="register">Registrierung</option>
      <option value="login">Anmeldung</option>
      <option value="repair">Reparatur</option>
      <option value="shop">Einkauf</option>
      <option value="delivery">Versand</option>
      <option value="account">Mein Profil</option>
    </select>
    <br>
    <button name="search_cat"class="btn btn-success text-right" value="refresh">Suchen</button>
  <?php } ?>
  <br>
  <br><br>



<?php if(isset($_POST['search_cat']) && isset($_POST['kategorie']) && $_POST['kategorie']!== "hide")
 {
    ?>

  <h5>Wähle eine Frage aus:</h5>

  <!-- Fragen nach Kategorieauswahl anzeigen-->
  <!--Keine Kategorie ausgewählt-->


  <!--Fragen zu Kategorie: Registrieren-->
  <?php if ($_POST['kategorie'] === "register") { ?>
  <select  name="question" style="width: 100%;" type="select">
    <option value="question1">--Frage1--</option>
    <option value="question2">--Frage2--</option>
  </select>
  <?php } ?>

  <!--Fragen zu Kategorie: Registrieren-->
  <?php if ($_POST['kategorie'] === "login") { ?>
  <select   name="question"style="width: 100%;" type="select">
    <option value="question1">--Frage3--</option>
    <option value="question2">--Frage4--</option>
  </select>
  <?php } ?>
  <button name="search_q"class="btn btn-success text-right" value="refresh">Antwort anzeigen</button>
<?php }else{} ?>
  <br><br>
</form>

</div>
<div class="col-sm-8 text-left">
<?php if (!isset($_POST['kategorie']) || $_POST['kategorie']==="hide") {
  echo 'Bitte wähle zuerst eine Kategorie aus.';} else {
 if(!isset($_POST['search_q'])){
  echo 'Bitte wähle eine Frage aus';
} else {
  if(isset($_POST['search_q']) && $_POST['question']!=="hide"){
  //Kategorie Registrierung : Frage 1
  if ($_POST['kategorie']==="register" && $_POST['question']==="question1"){
    echo 'Antwort 1';
  }
  //Kategorie Registrierung : Frage 2
  if ($_POST['kategorie']==="register" && $_POST['question']==="question2"){
    echo 'Antwort 2';
  }
  //Kategorie Anmeldung : Frage 3
  if ($_POST['kategorie']==="login" && $_POST['question']==="question1"){
    echo 'Antwort 3';
  }
  //Kategorie Anmeldung : Frage 4
  if ($_POST['kategorie']==="login" && $_POST['question']==="question2"){
    echo 'Antwort 4';
  }
}else{echo 'Wähle eine Frage aus';}}} ?>

</div>
</div>
</div>
<br><br>
<div class="container bg-black">
<h2>Dokumentation</h2>
  <br><br>
<div class="row">
  <div class="col-sm-3 text-left" style="border-right: 1px solid lightgrey;">
    <h5>Wähle deine Konsole aus um Zugriff auf die entsprechende Dokumentation zu erhalten</h5><br>
    <select style="width: 100%;"type="select">
    <option value="hide">--Hersteller--</option>
    <option value="amiga">Amiga</option>
    <option value="atari">Atari</option>
    <option value="commodore">Commodore</option>
    <option value="nintendo">Nintendo</option>
    <option value="sega">Sega</option>
    <option value="sony">Sony</option>
  </select>
  <br><br>
  <select disabled style="width: 100%;" type="select">
  <option value="hide">--Modell--</option>
</select>
  <br><br>
<button class="btn btn-success" value="refresh">Suchen</button>
  </div>
<div class="col-sm-9">

            <ul class="nav nav-tabs bg-black">
              <li class="active"><a class="font-white" href="#doc" data-toggle="tab">Handbücher</a></li>
              <li><a href="#guide" class="font-white" data-toggle="tab">Guides</a></li>
              <li><a href="#self" class="font-white" data-toggle="tab">Selbstreperatur</a></li>
            </ul>
            <br>
            <div class="tab-content bg-black">
              <div class="tab-pane active bg-black text-left" id="doc">
                <p>Bitte Konsole auswählen</p>
              </div>
              <div class="tab-pane bg-black text-left" id="guide">
                <p>Bitte Konsole auswählen</p>
              </div>
              <div class="tab-pane bg-black  text-left" id="self">
                <p>Bitte Konsole auswählen</p>
              </div>
            </div>
</div>
</div>
</div>
<br><br>
<div class="container-fluid container-padding">
<h2>Kontakt</h2>
<br><br>
<h5>Wir konnten deine Fragen noch nicht klären? <a href="index.php?section=aboutus">Hier</a> geht es zum Kontaktformular</h5>

</div>
