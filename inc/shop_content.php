<?php
@session_start();
include "inc/database_connection.php";
$sql = "SELECT * FROM shop";
$shop_item = mysqli_query($conn, $sql);

if(isset($_POST['submit'])){
  if(isset($_SESSION['cart'])){
    //Prüfen ob Produkt bereits in Warenkorb ist
    $product_check_id = array_column($_SESSION['cart'], "product_id");
    if(!in_array($_POST['product_id'], $product_check_id)){
      $cart = array(
        'product_id' => $_POST['product_id'],
        'title' => $_POST['title'],
        'price' => $_POST['price']);
    } else {
      echo '<script>alert("Products already added to cart")</script>';
      echo '<script>window.location="index.php"</script>';
    }
} else {
  $cart = array(
    'product_id' => $_POST['product_id'],
    'title' => $_POST['title'],
    'price' => $_POST['price']
 );
}
}
 ?>

<div class="jumbotron banner-bot-border bg-shop">
  <h1>Onlineshop</h1>
</div>

<div class="container-fluid bg-grey container-padding">
  <div class="row">
    <div class="col-sm-9" style="float:left; border-right: 1px solid lightgrey;">

      <h1>Artikelübersicht.</h1></br>
      <?php
      if (mysqli_num_rows($shop_item) > 0) {
      while($row = mysqli_fetch_array($shop_item)){?>
        <div class="well">
          <div class="container-fluid text-left">
            <h4><u><?php echo $row['title'] ?></u></h4>
            <hr>
          </div>
          <div class="container-fluid">
      <div class="row">

      <div class="col-sm-4">
      <img src="<?php echo $row['image_link'] ?>" class="img-thumbnail img-responsive" width="300px" height="250px"></img>
      </div>

      <div class="col-sm-6 text-left">
          <table class="table table-condensed">
          <thead>
            <tr>
            <th>Informationen:</th>
            <th></th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td>Artikelnummer: </td>
            <td><?php echo $row['product_id'] ?></td>
          </tr>
      <!-- Weitere Informationen -->
          <tr>
            <td>Beschreibung:</td>
            <td><?php echo $row['description'] ?></td>
          </tr>
        </tbody>
      </table>
      </div>

      <div class="col-sm-2">
        <div class="container-fluid text-right" >
          <h5>Preis (inkl. 19 % Mwst.):</h5>
          <br>
          <h4><?php echo $row['price'] ?> <i class="fa fa-euro"></i></h4>
        </div>
      </div>
      </div>
    </div>
    <hr>
      <div class="container-fluid">
        <form method="post" action="">
          <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>"/>
          <input type="hidden" name="title" value="<?php echo $row['title'] ?>"/>
          <input type="hidden" name="price" value="<?php echo $row['price'] ?>"/>
          <button type"submit" name="add" class="btn btn-warning" style="float:right;"><i class="fa fa-cart-plus fa-1x"></i> In den Warenkorb</button>
      </form>
      </div>
    </div>
      <hr>
      <?php  }} ?>
      </div>
    <div class="col-sm-3" style="position:fixed; right: 0px;">
      <h1>Warenkorb.</h1></br>
      <div class="well">
      <table class=" table table-striped ">
        <tr>
          <th>Artikel</th>
          <th>Preis</th>
          <th>Entf.</th>
        </tr>
      <?php  if(!isset($cart)){ ?>
      <tr><td><p>Keine Artikel im Warenkorb.</p></td>
    <td></td>
      <td></td>
        <td></td>
      </tr>
      <?php } ?>
      </table>
      <button class="main_button">Zur Kasse</button>
    </div>
    </div>
    </div>
  </div>
