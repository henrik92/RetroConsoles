<div class="jumbotron bg-home banner-bot-border">
  <p>Willkommen zurück <?php echo $_SESSION['vorname'] ?> !</p>
</div>

<div class="container-fluid">
<div class="container">
  <div class="row">
    <div class="col-sm-6">
  <div class="panel panel-default">
    <div class="panel-heading">Deine persönlichen Informationen</div>
    <div class="panel-body">
      Vorname:
      Nachnachme:
      Straße:
      Hausnummer:
      PLZ:
      Stadt:
    </div>
  </div>
</div>

<div class="col-sm-6">
  <div class="panel panel-default">
    <div class="panel-heading">Zahlungsinformationen</div>
    <div class="panel-body">Panel Content</div>
  </div>
</div>
</div>
</div>

<div class="container">
  <div class="panel panel-default">
  <div class="panel-heading">Bestellungen</div>
  <div class="panel-body">
    <table class="table">
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


<div class="container">
  <div class="panel panel-default">
  <div class="panel-heading">Reperaturen</div>
  <div class="panel-body">
    <table class="table">
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
