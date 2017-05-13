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
  <div class="container-fluid bg-black">
      <div class="col-sm-12">
          <ul class="brands">
            <li><img class="img img-responsive" src="img/logos/amiga.png" alt="Amiga"/></li>
            <li><img class="img img-responsive" src="img/logos/comm.png" alt="Commodore"/></li>
            <li><img class="img img-responsive" src="img/logos/nin.png" alt="Nintendo"/></li>
            <li><img class="img img-responsive" src="img/logos/sega.png" alt="Sega"/></li>
            <li><img class="img img-responsive" src="img/logos/sony.png" alt="Sony"/></li>
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
      <h5>1.Schritt: </h5>
      <hr>
    <i class="fa fa-pencil-square-o fa-5x"></i>
    <br><br>
  <p>Formular ausfüllen und abschicken</p>
  </div>
</div>
<div class="col-sm-3 font-white">
  <div class="well well-sm bg-black">
    <h5>2.Schritt</h5>
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
<h5>4.Schritt</h5>
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
<div class="container bg-black">
  <h2>Reperaturauftrag erstellen.</h2>
  <div class="panel bg-black">
    <div class="panel-heading bg-black">
  <ul class="nav nav-tabs bg-black" >
    <li class="active"><a data-toggle="tab" href="#console">Deine Konsole</a></li>
    <li><a data-toggle="tab" href="#account">Persönliches</a></li>
    <li><a data-toggle="tab" href="#shipping">Addressdaten</a></li>
    <li><a data-toggle="tab" href="#payment">Zahlung</a></li>
    <li><a data-toggle="tab" href="#overview">Übersicht</a></li>
</ul>
  </div>

  <div class="panel-body bg-black">
<div class="tab-content bg-black text-left">
  <div id="console" class="tab-pane fade in active">
<form id="acc" name="acc" action="" method="post" enctype="text/html">
  <h5>Wähle deine Konsole aus: </h5>
    <p>
      <label for="nachname">Hersteller:</label>
      <select name="make"></select>
    </p>
    <p>
      <label for="vorname">Modell:</label>
      <select name="model"></select>
    </p>
    <p>
      <label for="strasse">Fehlerkategorie:</label>
      <select name="cat"></select>
    </p>
    <p>
      <label for="hausnr">Beschreibe dein Problem:</label>
      <textarea id="hausnr" type="text" name="hausnr" value="" size="5" maxlength="140"></textarea>
    </p>
</form>
  </div>


  <div id="account" class="tab-pane fade">
<form id="acc" name="acc" action="" method="post" enctype="text/html">
    <p>
      <label for="nachname">Titel:</label>
      <input id="nachname" type="text" name="nachname" value="" size="20" maxlength="50" />
    </p>
    <p>
      <label for="vorname">Vorname:</label>
      <input id="vorname" type="text" name="vorname" value="" size="20" maxlength="50" />
    </p>
    <p>
      <label for="strasse">Nachname:</label>
      <input id="strasse" type="text" name="strasse" value="" size="5" maxlength="5" />
    </p>
    <p>
      <label for="hausnr">E-Mail-Adresse:</label>
      <input id="hausnr" type="text" name="hausnr" value="" size="5" maxlength="5" />
    </p>
    <p>
      <label for="plz">Telefon:</label>
      <input id="plz" type="text" name="plz" value="" size="5" maxlength="5" />
    </p>
</form>
  </div>
  <div id="payment" class="tab-pane fade">
<form id="pay" name="pay" action="" method="post" enctype="text/html">
  <h2>Vorkasse</h2>
  </form></div>

  <div id="overview" class="tab-pane fade">
    <form id="con" name="con" action="" method="post" enctype="text/html">

          <h2>Auftragsübersicht</h2> </form></div>
  <div id="shipping" class="tab-pane fade">
    <p>
      <label for="nachname">Straßenname:</label>
      <input id="nachname" type="text" name="nachname" value="" size="20" maxlength="50" />
    </p>
    <p>
      <label for="vorname">Hausnummer:</label>
      <input id="vorname" type="text" name="vorname" value="" size="20" maxlength="50" />
    </p>
    <p>
      <label for="strasse">Postleitzahl:</label>
      <input id="strasse" type="text" name="strasse" value="" size="5" maxlength="5" />
    </p>
    <p>
      <label for="hausnr">Stadt:</label>
      <input id="hausnr" type="text" name="hausnr" value="" size="5" maxlength="5" />
    </p>
  </div>
</div>
</div>
<div class="container bg-black">
  <div class="row">
    <div class="col-sm-6">
      <input style="width:50%;" class="btn btn-success" type="Submit" name="" value="Zurück" />
    </div>
    <div class="col-sm-6">
<input style="width:50%;" class="btn btn-success" type="Submit" name="" value="Weiter" />
    </div>
</div>
</div>
</div>
</div>
