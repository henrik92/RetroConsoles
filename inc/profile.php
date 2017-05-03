<div class="jumbotron bg-home banner-bot-border">
  <p>Willkommen zurück <?php echo $_SESSION['vorname'] ?> !</p>
</div>

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Accountfunktionen
          </div>
          <div class="panel-body" style="display:inline-block;">
            <button class="btn" type="button" value="Editieren">Reperaturauftrag erstellen</button><br>
            <button class="btn" type="button" value="Editieren">Warenkorb ansehen</button><br>
            <button class="btn" type="button" value="Editieren">Benutzerdaten editieren</button><br>
            <button class="btn" type="button" value="Editieren">Kontaktiere uns</button><br>
            <button class="btn" type="button" value="Editieren">Ausloggen</button><br>
            <button class="btn btn-danger" type="button" value="Editieren">Account löschen</button><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
<div class="container">
  <div class="row">
    <div class="col-sm-6">
  <div class="panel panel-default">
    <div class="panel-heading"><b>Deine persönlichen Informationen</b></div>
    <div class="panel-body">
      <div class="row">
      <div class="col-sm-6">
        <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
            <th>Stammdaten</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Kundennummer:</td>
            <td><?php echo $_SESSION['user_id']?></td>
            <tr>
          <tr><td>Titel:</td>
              <td>Herr</td>
            <tr>
          <tr><td>Vorname:</td>
  <td><?php echo $_SESSION['vorname']?></td>
            <tr>
          <tr><td>Nachname:</td>
  <td><?php echo $_SESSION['name']?></td>
            <tr>
          <tr><td>Geburtsdatum:</td>
    <td>01.01.2000</td>
            <tr>
          <tr><td>E-Mail-Adresse:</td>
  <td><?php echo $_SESSION['email']?></td>
</tr>
          <tr><td>Telefonnummer:</td>
<td>12345/6789</td>
          </tr>
          <tr><td>Mitglied seit:</td>
    <td><?php echo $_SESSION['regdate']?></td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>
      <div class="col-sm-6">
        <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
            <th>Lieferadresse</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            <tr><td>Straße:</td>
  <td><?php echo $_SESSION['street']?></td>
            </tr>
            <tr><td>Hausnummer:</td>
  <td><?php echo $_SESSION['streetnr']?></td>
            </tr>
            <tr><td>Postleitzahl:</td>
  <td><?php echo $_SESSION['postcode']?></td>
            </tr>
            <tr><td>Stadt:</td>
  <td><?php echo $_SESSION['city']?></td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
    </div>
  </div>
  <div class="panel-footer">
<button class="btn" value="Editieren">Editieren</button>
  </div>
  </div>
</div>

<div class="col-sm-6">

  <div class="panel panel-default">
    <div class="panel-heading"><b>Zahlungsinformationen</b></div>
    <div class="panel-body"

    <div class="row">
    <div class="panel panel-default">

    <ul class="nav nav-tabs">
      <li><a data-toggle="tab" href="#vorkasse"><span class="fa fa-credit-card"> Vorkasse</span></a></li>
      <li><a data-toggle="tab" href="#visa"><i class="fa fa-cc-visa"> Visa</i></a></li>
      <li><a data-toggle="tab" href="#mastercard"><i class="fa fa-cc-mastercard"> Mastercard</i></a></li>
      <li><a data-toggle="tab" href="#paypal"><i class="fa fa-paypal"></i> Paypal</a></li>
    </ul>

  </div>

      <div class="panel-body>"
    <div class="tab-content tab-border">
      <div id="vorkasse" class="tab-pane fade in active">
        <h4><b>Vorkasse</b></h4>
        <h5><u>Bankverbindung</u></h5>
        <p>Kontoinhaber: RetroConsoles</p>
        <p>Kontonummer:</p>
        <p>Bankleitzahl:</p>
        <p>Bankname:</p>
        <p>BIC/SWIFT-Code:</p>
        <p>IBAN-Code:</p>
      </div>
      <div id="visa" class="tab-pane fade">
        <h4><b>Visa</b></h4>
      </div>
      <div id="mastercard" class="tab-pane fade">
        <h4><b>mastercard</b></h4>
      </div>
      <div id="paypal" class="tab-pane fade">
        <h4><b>Paypal</b></h4>
      </div>
    </div>
  </div>
  <div class="panel-footer">
<button class="btn" type="button" value="Editieren">Editieren</button>
  </div>

  </div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="container">
  <div class="panel panel-default">
  <div class="panel-heading"><b>Bestellungen</b></div>
  <div class="panel-body">
    <div class="table-responsive">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Bestellnr.</th>
        <th>Status</th>
        <th>Artikel</th>
        <th>Avisierter Liefertermin</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><div class="alert alert-warning">Keine Bestellungen vorhanden.</div></td>
      </tr>
    </tbody>
  </table>
</div>
  </div>
</div>
</div>


<div class="container">
  <div class="panel panel-default">
  <div class="panel-heading"><b>Reperaturen</b></div>
  <div class="panel-body">
    <div class="table-responsive">
    <table class=" table table-hover">
    <thead>
      <tr>
        <th>Servicenummer</th>
        <th>Status</th>
        <th>Gerät</th>
        <th>Fehlerkategorie</th>
        <th>Avisierte Fertigstellung</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><div class="alert alert-warning">Keine Reperaturaufträge erteilt.</div></td>
      </tr>
    </tbody>
  </table>
</div>
  </div>
</div>
</div>
</div>
