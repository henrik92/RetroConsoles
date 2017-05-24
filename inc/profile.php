<?php $_SESSION['page'] = "profile"; ?>
<div class="container first-padding bg-black">
<h2>Willkommen zurück <?php echo $_SESSION['vorname'] ?> ! </h2>
</div>

<div class="container bg-black">
  <div class="panel panel-default bg-black">
    <div class="panel-heading bg-black">
      <strong>Accountfunktionen</strong>
    </div>
    <div class="panel-body bg-black font-black text-left">
      <button class="btn" type="button" value="Editieren">Reperaturauftrag erstellen</button>
      <button class="btn" type="button" value="Editieren">Warenkorb ansehen</button>
      <button class="btn" type="button" value="Editieren">Kontaktformular</button><br>
      <br>
      <button class="btn" type="button" value="Editieren">E-Mail-Adresse ändern</button>
      <button class="btn" type="button" value="Editieren">Passwort ändern</button><br>
      <br>
      <button class="btn btn-danger" type="button" value="Editieren">Account löschen</button><br>
    </div>
  </div>
</div>

  <div class="container bg-black">
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
</div>

<!--<script></script>-->

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
    <input id="shipping_show" type="checkbox" name="pay_address" value="address">Abweichende Lieferadresse</input>
  </form>
</div>
  </div>
  <div class="col-sm-6">
    <?php if (isset($_POST['address'])){ ?>
      <div class="table-responsive bg-black hide" >
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
    <input id="shipping_show" type="radio" name="diff" name="diff_shipment">Abweichende Rechnungsadresse</input>
  </div>
    <?php } ?>
  </div>
    </div>
  </div>
  </div>
</div>

<div class="container bg-black">
<div class="panel panel-default bg-black">
    <div class="panel-heading bg-black"><b>Zahlungsinformationen</b></div>
    <div class="panel-body bg-black text-left>"
        <h4><b>Vorkasse</b></h4>
        <br>
        <p>Kontoinhaber: OldKonsole</p>
        <p>Kontonummer: 123456789</p>
        <p>Bankleitzahl: 987654321</p>
        <p>Bankname: Musterbank</p>
        <p>BIC/SWIFT-Code: NOLADE2H</p>
        <p>IBAN-Code:DE987654321123456789</p>
  </div>
</div>
</div>

<!--
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
-->
