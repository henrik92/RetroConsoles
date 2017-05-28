
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>



<?php $_SESSION['page'] = "repair";
$_SESSION['console_ok']=false;?>
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

    <!-- <div class="panel-heading bg-black">
  <ul class="nav nav-tabs bg-black" >
    <li class="active"><a data-toggle="tab" href="#console">Deine Konsole</a></li>
    <li><a disabled data-toggle="tab" href="#account">Persönliches</a></li>
    <li><a data-toggle="tab" href="#shipping">Addressdaten</a></li>
    <li><a data-toggle="tab" href="#overview">Übersicht</a></li>
</ul>
  </div> -->

  <div class="panel-body bg-black">
<div class="tab-content bg-black text-center">
  <div id="console" class="tab-pane active">
<form action="" method="post" enctype="text/html">
  <h4>- Schritt 1 / 4 -</h4>
  <h5>Wähle deine Konsole aus </h5>
  <hr>
  <ul>
    <li>  <select name="make" >
        <option value="hide">Hersteller wählen</option>
        <option value="make_a">Hersteller A</option>
        <option value="make_b">Hersteller B</option>
        <option value="make_c">Hersteller C</option>
      </select>
    </li>
    <br>
    <li>
      <select name="model" >
        <option value="hide">Modell wählen</option>
        <option value="model_a">Modell A</option>
        <option value="model_b">Modell B</option>
        <option value="model_c">Modell C</option>
      </select>
    </li>
    <br>
    <li>
      <select name="cat" >
          <option value="hide">Kategorie wählen</option>
          <option value="cat_a">Kategorie A</option>
          <option value="cat_b">Kategorie B</option>
          <option value="cat_c">Kategorie C</option>
      </select>

    </li>
    <br>
    <li>
      <textarea placeholder="Beschreibe dein Problem..." type="text" name="beschreibung"></textarea>
    </li>
  </ul>
  <div class="container text-center">
  <button name="next_tab" type="submit" class="btn btn-success" data-toggle="tab" href="#account">Weiter</button>
</div>
  <!-- <button style="width:50%;" id="previous" class="btn btn-success" value="prev">Zurück</button>
  <button style="width:50%;" id="next" class="btn btn-success"  type="submit" name="next">Weiter</button> -->
</form>
<?php if (isset($_POST['next_tab'])){
$hersteller = $_POST['make'];
$_SESSION['form_modell'] = $_POST['model'];
$_SESSION['form_cat'] = $_POST['cat'];
$_SESSION['form_beschreibung'] = $_POST['beschreibung'];

/*  if (!isset($_POST['make']) || $_POST['make']==="hide"){
    echo 'Bitte Hersteller auswählen';
  }
  if (!isset($_POST['model']) || $_POST['model']==="hide"){
    echo 'Bitte Modell auswählen';
  }
  if (!isset($_POST['cat']) || $_POST['cat']==="hide"){
    echo 'Bitte Kategorie auswählen';
  }
  if (!isset($_POST['beschreibung']) || $_POST['beschreibung']!==""){
    echo 'Bitte Problembeschreibung angeben';
  }

  /*echo '<a name="next_tab" id="next_tab" data-toggle="tab" href="#account"></a>'*/
  ?>
    <script>
    $(document).ready(function(){
        $("#next_tab").click(function(){
            $("#account").tab('show');
        });
    });
  </script>
<?php
}else {

}?>
  </div>


  <div id="account" class="tab-pane ">
<form id="acc" name="acc" action="" method="post" enctype="text/html">
  <h4>- Schritt 2 / 4 -</h4>
  <h5>Mit wem haben wir das Vergnügen?</h5>
    <hr>
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
      <input placeholder="Vorname" id="vorname" type="text" name="vorname"/>
    </li>
    <br>
    <li>
      <input placeholder="Nachname" id="strasse" type="text" name="strasse"/>
    </li>
    <br>
    <li>
      <input placeholder="E-Mail-Adresse" id="email" type="text" name="hausnr"/>
    </li>
    <br>
  </ul>
  <div class="container text-center">
  <button name="previous" class="btn btn-default" data-toggle="tab" href="#console">Zurück</button>
  <button name="next" class="btn btn-success" data-toggle="tab" href="#shipping">Weiter</button>
</div>
</form>
  </div>

  <div id="overview" class="tab-pane fade">
    <form id="con" name="con" action="" method="post" enctype="text/html">
  <h4>- Schritt 4 / 4 -</h4>
<h5>Alle Daten korrekt?</h5>
  <hr>
<br>
<div class="row">
<div class="col-sm-6">
<ul class="text-left">
  <li><i class="fa fa-gamepad fa-4x"></i></li>
  <br>
  <li>Hersteller</li>
  <br>
  <li>Modell</li>
  <br>
  <li>Fehlerkategorie</li>
  <br>
  <li>Problembeschreibung:<br><li>
</ul>
</div>
<div class="col-sm-6">
  <ul class="text-left">
    <li><i class="fa fa-user-circle fa-3x"></i></li>
    <br>
    <li>Anrede - Vorname - Name</li>
    <br>
    <li>Straße - Hausnummer</li>
    <br>
    <li>Postleitzahl - Ort<br><li>
      <br>
    <li>E-Mail-Adresse</li>
  </ul>
</div>
</div>
<div class="container">
  <button name="previous" class="btn btn-default text-left" data-toggle="tab" href="#shipping">Zurück</button>
  <button name="next" class="btn btn-success text-right" data-toggle="tab" href="#success">Auftrag abschicken</button>
</div>
</form>
</div>


  <div id="shipping" class="tab-pane fade">
      <h4>- Schritt 3 / 4 -</h4>
  <h5>Wo finden wir dich?</h5>
    <hr>
<ul>
    <li>
      <input placeholder="Straßenname"id="nachname" type="text" name="nachname"/>
    </li>
    <br>
    <li>
      <input placeholder="Hausnummer" id="vorname" type="text" name="vorname"/>
    </li>
    <br>
    <li>
      <input placeholder="Postleitzahl" id="strasse" type="text" name="strasse"/>
    </li>
    <br>
    <li>
      <input placeholder="Stadt" id="hausnr" type="text" name="hausnr"/>
    </li>
  </ul>
  <div class="container text-center">
  <button name="previous" class="btn btn-default" data-toggle="tab" href="#account">Zurück</button>
  <button name="next" class="btn btn-success" data-toggle="tab" href="#overview">Weiter</button>
</div>
  </div>

  <div id="success" class="tab-pane fade">
    <h4>- Erfolg! -</h4>
    <h5>Dein Auftrag ist unterwegs zu uns</h5>
  <hr>
  <br>
  <i class="fa fa-check-square fa-5x"></i>
  <h5>Wir freuen uns schon auf dich!</h5>
  <h6>Unsere Mitarbeiter werden sich so schnell wie möglich bei dir melden!</h6>
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
