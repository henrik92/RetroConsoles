<div class="jumbotron bg-home banner-bot-border">
  <p>Willkommen zurück <?php echo $_SESSION['vorname'] ?> !</p>
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
          <tr><td>Kundennummer:</td><tr>
          <tr><td>Vorname:</td><tr>
          <tr><td>Nachname:</td><tr>
          <tr><td>Mitglied seit:</td></tr>
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
            <tr><td>Straße:</td></tr>
            <tr><td>Hausnummer:</td></tr>
            <tr><td>Postleitzahl:</td></tr>
            <tr><td>Stadt:</td></tr>
        </tbody>
      </table>
    </div>
  </div>
    </div>
  </div>
  </div>
</div>

<div class="col-sm-6">

  <div class="panel panel-default">
    <div class="panel-heading"><b>Zahlungsinformationen</b></div>
    <div class="panel-body"

    <div class="row">
      <div class="col-sm-3">
    <div class="panel panel-default">
      <div class="panel-body">
    <ul class="nav nav-tabs nav-stacked">
      <li><a data-toggle="tab" href="#vorkasse"><span class="fa fa-credit-card"> Vorkasse</span></a></li>
      <li><a data-toggle="tab" href="#visa"><i class="fa fa-cc-visa"> Visa</i></a></li>
      <li><a data-toggle="tab" href="#mastercard"><i class="fa fa-cc-mastercard"> Mastercard</i></a></li>
      <li><a data-toggle="tab" href="#paypal"><i class="fa fa-paypal"></i> Paypal</a></li>
    </ul>
  </div>
  </div>
  </div>

      <div class="col-sm-9">
    <div class="tab-content tab-border">
      <div id="vorkasse" class="tab-pane fade">
        <h4>Vorkasse</h4>
      </div>
      <div id="visa" class="tab-pane fade">
        <h4>Visa</h4>
      </div>
      <div id="mastercard" class="tab-pane fade">
        <h4>mastercard</h4>
      </div>
      <div id="paypal" class="tab-pane fade">
        <h4>Paypal</h4>
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
