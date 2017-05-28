<?php
$agb_err = "";

if (isset($_POST['buy'])) {
    header("Location: index.php?section=cart_success");
    unset($_SESSION['cart']);
    $_SESSION['sum'] = 0;
  }else {
  $agb_err = "Bitte akzeptiere unsere AGB's";
}

if (isset($_POST['cancel'])){
  header("Location: index.php?section=shop");
}
?>



<div class="container bg-black font-white first-padding">
<h1>Bestellübersicht</h1>
<div class="well well-sm bg-black font-white">
<div class="container-fluid text-left">
    <h5><u>Persönliche Daten</u></h5>
    <br>
        <ul class="text-left">
        <li><?php echo $_SESSION['gender'];echo " "; echo $_SESSION['vorname']; echo " ";  echo $_SESSION['name']; ?></li>
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
<div class="container-fluid text-center" >
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
        <td><br> Gesamtsumme: </td>
        <td><br><u><?php echo $_SESSION['sum']; ?> €</u></td>
      </tr>
  </table>
</div>



<div class="container-fluid text-center">
<p>...</p>
<form>
<input style="width: auto;" type="checkbox" value="agb" name="agb" unchecked> Ich habe die AGB gelesen und akzeptiert.</input>
</form>
</div>
<br>
<div class="container-fluid text-center">
  <form action="" method="post">
    <button type="submit" class="btn btn-warning" name="cancel">Zurück</button>
<button type="submit" class="btn btn-warning" name="buy">Einkauf abschliessen</button>
  </form>
  <?php
    if (isset($_POST['buy']) && !isset($_POST['agb']) ){
      echo '<p class="bg-danger">'. $agb_err . '</p>';
    } else {}
  ?>
</div>
</div>
</div>
