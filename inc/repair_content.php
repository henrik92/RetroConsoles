
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>



<?php $_SESSION['page'] = "repair"; ?>
  <div class="container-fluid bg-black first-padding">
  <div class="container bg-black font-white">
    <h1>
        Reparaturservice
    </h1>
    <h5> - Schnelle Hilfe für deine Konsole - </h5>
    <br>
    <p>Gerade ältere Konsolen sind oft nur schwer zu beschaffen bzw. zu reparieren, erst Recht wenn die Hersteller die Produktion bereits eingestellt haben. <br>
    Ganz egal ob deine Konsole regelmäßig abstürzt, der Controller nicht korrekt funktioniert oder das Laufwerk keine Spiele mehr liest  -
    Unser Reparaturteam hilft dir weiter!<br>
    Unabhängig vom Hersteller sorgen wir für schnelle Abhilfe bei einem fairen Preis.</p>
  </div>
<br><br>
  <div class="container bg-black">
  <h3>Wir unterstützen folgende Hersteller: </h3>
  <br>
  <div class="container-fluid bg-black brandlogo">
    <div class="row">
    <div class="col-sm-4">
      <ul>
        <li><img class="img img-responsive" src="img/logos/amiga.png" alt="Amiga"/></li>
        <li><img class="img img-responsive" src="img/logos/comm.png" alt="Commodore"/></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul>
      <li><img class="img img-responsive" src="img/logos/nin.png" alt="Nintendo"/></li>
      <li><img class="img img-responsive" src="img/logos/sega.png" alt="Sega"/></li>
    </ul>
    </div>
    <div class="col-sm-4">
      <ul>
      <li>ATARI-LOGO</li>
      <li>SONY LOGO</li>
    </ul>
    </div>
  </div>
  <br><br>
  </div>
  </div>

  <div class="container bg-black">
    <h3>Reparatur in nur 4 Schritten</h3>
    <br>
    <div class="row">
<div class="col-sm-3 font-white">
  <div class="well well-sm bg-black">
      <h5>1. Schritt: </h5>
      <hr>
    <i class="fa fa-pencil-square-o fa-5x"></i>
    <br><br>
  <p>Formular ausfüllen und abschicken</p>
  </div>
</div>
<div class="col-sm-3 font-white">
  <div class="well well-sm bg-black">
    <h5>2. Schritt</h5>
    <hr>
    <i class="fa fa-cube fa-5x"></i>
    <br><br>
    <p>Konsole verpacken und verschicken</p>
  </div>
</div>
<div class="col-sm-3 font-white">
  <div class="well well-sm bg-black">
    <h5>3. Schritt: </h5>
    <hr>
    <i class="fa fa-hourglass-half fa-5x" aria-hidden="true"></i>
    <br><br>
    <p>Angebot unserer Mitarbeiter abwarten</p>
  </div>
</div>
<div class="col-sm-3 font-white">
  <div class="well well-sm bg-black">
<h5>4. Schritt</h5>
    <hr>
    <i class="fa fa-handshake-o fa-5x" aria-hidden="true"></i>
    <br><br>
    <p>Annahme oder Ablehnung des Angebots</p>
  </div>
</div>
</div>
</div>
<br><br>
<!--Formular Reperatur-->
<div class="container bg-black" style="height: 600px;">
  <h2>Reperaturauftrag erstellen.</h2>
  <div class="panel bg-black">
    <div class="panel-heading bg-black">
  <ul class="nav nav-tabs bg-black" >
    <li class="active"><a data-toggle="tab" href="#console">Deine Konsole</a></li>
    <li><a data-toggle="tab" href="#account">Persönliches</a></li>
    <li><a data-toggle="tab" href="#shipping">Addressdaten</a></li>
    <li><a data-toggle="tab" href="#overview">Übersicht</a></li>
</ul>
  </div>

  <div class="panel-body bg-black">
<div class="tab-content bg-black text-left">
  <div id="console" class="tab-pane active">
<form id="acc" name="acc" action="" method="post" enctype="text/html">
  <h5>Wähle deine Konsole aus: </h5>
  <ul>
    <li>  <select name="make">
        <option value="hide">Hersteller wählen</option>
      </select>
       <a href="index.php?section=repair#con" data-toggle="popover" title="Hersteller" data-content="Wähle den Hersteller deiner Konsole aus."><i class="fa fa-info-circle fa-2x"></i></a>
    </li>
    <br>
    <li>
      <select name="model">
        <option value="hide">Modell wählen</option>
      </select>
      <a href="index.php?section=repair#con" data-toggle="popover" title="Modell" data-content="Wähle das Konsolenmodell des Herstellers aus."><i class="fa fa-info-circle fa-2x"></i></a>
    </li>
    <br>
    <li>
      <select name="cat">
          <option value="hide">Kategorie wählen</option>
      </select>
      <a href="index.php?section=repair#con" data-toggle="popover" title="Kategorie" data-content="Wähle eine passende Kategorie bezüglich deines Problems aus."><i class="fa fa-info-circle fa-2x"></i></a>

    </li>
    <br>
    <li>
      <textarea id="hausnr" placeholder="Beschreibe dein Problem..." type="text" name="hausnr" value="" size="5" maxlength="140"></textarea>
      <a href="index.php?section=repair#con" data-toggle="popover" title="Problembeschreibung" data-content="Beschreibe uns kurz dein Problem."><i class="fa fa-info-circle fa-2x"></i></a>
    </li>
  </ul>
</form>
  </div>


  <div id="account" class="tab-pane ">
<form id="acc" name="acc" action="" method="post" enctype="text/html">
  <h5>Mit wem haben wir das Vergnügen?</h5>
<ul>
    <li>
      <select name="anrede">
      <option value="hide">Anrede wählen</option>
      <option value="mrs">Frau</option>
      <option value="mr">Herr</option>
    </select>
    </li>
    <br>
    <li>
      <input placeholder="Vorname" id="vorname" type="text" name="vorname" value="" size="20" maxlength="50" />
    </li>
    <br>
    <li>
      <input placeholder="Nachname" id="strasse" type="text" name="strasse" value="" size="5" maxlength="5" />
    </li>
    <br>
    <li>
      <input placeholder="E-Mail-Adresse" id="email" type="text" name="hausnr" value="" size="5" maxlength="5" />
    </li>
    <br>
    <li>
    <input placeholder="Telefonnummer"id="plz" type="text" name="plz" value="" size="5" maxlength="5" />
    </li>
  </ul>
</form>
  </div>

  <div id="overview" class="tab-pane fade">
    <form id="con" name="con" action="" method="post" enctype="text/html">

          <h4 class="text-left">Alle Daten korrekt?</h4>
          <br>
<div class="row">
<div class="col-sm-6">
  <i class="fa fa-gamepad fa-3x"></i><br>
<ul>
  <li>Hersteller:Modell</li>
  <br>
  <li>Kat.</li>
  <br>
  <li>Problembeschreibung:<br><li>
</ul>
</div>
<div class="col-sm-6">
  <i class="fa fa-user-circle fa-3x"></i><br>
  <ul>
    <li>Anrede:Vorname:Name</li>
    <br>
    <li>Str.:Hausnr</li>
    <br>
    <li>PLZ:Ort<br><li>
      <br>
    <li>Mail</li>
    <br>
    <li>Telefon<br><li>
  </ul>
</div>
</div>
        </form>
        </div>
  <div id="shipping" class="tab-pane fade">
  <h5>Wo finden wir dich?</h5>
<ul>
    <li>
      <input placeholder="Straßenname"id="nachname" type="text" name="nachname" value="" size="20" maxlength="50" />
    </li>
    <br>
    <li>
      <input placeholder="Hausnummer" id="vorname" type="text" name="vorname" value="" size="20" maxlength="50" />
    </li>
    <br>
    <li>
      <input placeholder="Postleitzahl" id="strasse" type="text" name="strasse" value="" size="5" maxlength="5" />
    </li>
    <br>
    <li>
      <input placeholder="Stadt" id="hausnr" type="text" name="hausnr" value="" size="5" maxlength="5" />
    </li>
  </div>
</div>
</div>
<div class="container bg-black">
  <div class="row">
    <div class="col-sm-6">
      <button style="width:50%;" id="previous" class="btn btn-success" value="prev">Zurück</button>
    </div>
    <div class="col-sm-6">
      <button style="width:50%;" id="next" class="btn btn-success"  type="submit" name="next">Weiter</button>
    </div>
</div>

</div>
</div>
<script type="text/javascript">
    $('#next').click(function(){
 $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

 $('#previous').click(function(){
 $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
</script>

</div>
