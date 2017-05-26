<?php
$agb_err = "";
if (isset($_POST['buy']) && isset($_POST['agb'])) {
  header('location: index.php?section=repair');
} else {
  $agb_err = "Bitte akzeptiere unsere AGB's";
}
?>



<div class="container bg-black font-white first-padding">
<h1>Warenkorb-Übersicht</h1>
<div class="container text-left">
    <h5><u>Persönliche Daten</u></h5>
    <br>
        <ul>
        <li>Herr <?php echo $_SESSION['vorname']; echo " ";  echo $_SESSION['name']; ?></li>
        <li><?php echo $_SESSION['email'] ?></li>
        <li><?php ?></li>
        <li><?php echo $_SESSION['street']; echo " "; echo $_SESSION['streetnr'];  ?></li>
        <li><?php echo $_SESSION['postcode']; echo " "; echo $_SESSION['city'];   ?></li>
      </ul>
    </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6"></div>

      <div class="col-sm-6"></div>
  </div>
</div>
<div class="container text-center" >
  <table class="table" style="color: white;">
    <thead>
    <tr>
      <th>Artikel</th>
      <th>Preis</th>
    </tr>
  </thead>

    <?php
      foreach ($_SESSION['cart'] as $id => $product) {
        ?>
        <tr>
        <td> <?php echo $product['Artikel'] ?> </td>
        <td> <?php echo $product['Preis'] ?> €</td>
      </tr>
      <?php } ?>
      <br><br>
      <tr>
        <td>  Gesamtsumme: </td>
        <td><?php echo $_SESSION['sum']; ?> €</td>
      </tr>
  </table>
</div>
</div>

<div class="container text-center">
<p>...</p>
<form>
<input style="width: auto;" type="checkbox" value="agb" name="agb"> Ich habe die AGB gelesen und akzeptiert.</input>
</form>
</div>
<br>
<div class="container text-center">
  <form action="" method="post">
    <button type="submit" class="btn btn-warning" name="cancel">Zurück</button>
<button type="submit" class="btn btn-warning" name="buy">Einkauf abschliessen</button>
  </form>
  <?php
    if ($agb_err !== ""){
      echo '<p class="bg-danger">'. $agb_err . '</p>';
    }
  ?>
</div>
