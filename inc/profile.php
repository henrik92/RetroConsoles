<div class="container first-padding bg-black">
<h2>Willkommen zurück <?php echo $_SESSION['vorname'] ?> ! </h2>
</div>

  <div class="container bg-black">
    <div class="row">
      <div class="col-sm-6 bg-black">
        <div class="panel panel-default bg-black">
          <div class="panel-heading bg-black">
              <strong>Persönliche Informationen</strong>
          </div>
          <div class="panel-body bg-black">
            <div class="row">
              <div class="col-sm-4"> AVATAR PICTURE
              </div>
              <div class="col-sm-8">
          <div class="table-responsive">
          <table class="table">
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
      </div>
    </div>
    </div>
  </div>
      <div class="col-sm-6 bg-black">
        <div class="panel panel-default bg-black">
          <div class="panel-heading bg-black">
            <strong>Accountfunktionen</strong>
          </div>
          <div class="panel-body bg-black font-black">
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

<div class="container bg-black">
  <div class="panel panel-default bg-black">
    <div class="panel-heading bg-black"><strong>Adressdaten</strong></div>
    <div class="panel-body bg-black">
      <div class="row">
      <div class="col-sm-6 bg-black">
        <div class="table-responsive">
        <table class="table table-responsive bg-black">
          <thead>
            <tr>
            <th>Rechnungsadresse</th>
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

    <form method="post" action="">
    <input type="checkbox" name="pay_address" value="address">Abweichende Lieferadresse</input>
  </form>
</div>
  </div>
  <div class="col-sm-6">
    <?php if (isset($_POST['address'])){ ?>
      <div class="table-responsive bg-black">
      <table class="table bg-black">
        <thead>
          <tr>
          <th>Lieferadresse</th>
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
    <?php } ?>
  </div>
    </div>
  </div>
  <div class="panel-footer  bg-black">
<button class="btn btn-warning font-black" value="Editieren">Editieren</button>
  </div>
  </div>
</div>
<div class="container bg-black">
  <div class="panel panel-default bg-black">
    <div class="panel-heading bg-black"><b>Zahlungsinformationen</b></div>
    <div class="panel-body bg-black"
    <div class="panel panel-default bg-black">

    <ul class="nav nav-tabs bg-black">
      <li><a data-toggle="tab" href="#vorkasse"><span class="fa fa-credit-card"> Vorkasse</span></a></li>
      <li><a data-toggle="tab" href="#visa"><i class="fa fa-cc-visa"> Visa</i></a></li>
      <li><a data-toggle="tab" href="#mastercard"><i class="fa fa-cc-mastercard"> Mastercard</i></a></li>
      <li><a data-toggle="tab" href="#paypal"><i class="fa fa-paypal"></i> Paypal</a></li>
    </ul>

  </div>

      <div class="panel-body bg-black>"
    <div class="tab-content tab-border bg-black">
      <div id="vorkasse" class="tab-pane fade in active bg-black text-left">
        <h4><b>Vorkasse</b></h4>
        <br>
        <p>Kontoinhaber: OldKonsole</p>
        <p>Kontonummer: 123456789</p>
        <p>Bankleitzahl: 987654321</p>
        <p>Bankname: Musterbank</p>
        <p>BIC/SWIFT-Code: NOLADE2H</p>
        <p>IBAN-Code:DE987654321123456789</p>
      </div>
      <div id="visa" disabled class="tab-pane fade bg-black">
        <h4><b>Visa</b></h4>
      </div>
      <div id="mastercard" class="tab-pane fade bg-black">
        <h4><b>mastercard</b></h4>
      </div>
      <div id="paypal" class="tab-pane fade bg-black">
        <h4><b>Paypal</b></h4>
      </div>
    </div>
  </div>
  <div class="panel-footer bg-black">
<button class="btn btn-warning font-black" type="btn btn-warning" value="Editieren">Editieren</button>
  </div>

  </div>
</div>
</div>


<div class="container bg-black">
  <div class="panel panel-default bg-black">
  <div class="panel-heading bg-black"><b>Bestellungen</b></div>
  <div class="panel-body bg-black">
    <div class="table-responsive">
    <table class="table table-hover bg-black font-white">
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


<div class="container bg-black">
  <div class="panel panel-default bg-black">
  <div class="panel-heading bg-black"><b>Reperaturen</b></div>
  <div class="panel-body bg-black">
    <div class="table-responsive">
    <table class=" table table-hover bg-black">
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
