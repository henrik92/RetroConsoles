
<?php $_SESSION['page'] = "shop";
@session_start();
include "inc/database_connection.php";
$sql = "SELECT * FROM shop";
$shop_item = mysqli_query($conn, $sql);

/*if(mb_detect_encoding($shop_item) != 'UTF-8') {
  $shop_item = utf8_encode($shop_item); }
*/
$_SESSION['sum'];

if(!isset($_SESSION['cart'])){
  //Shopping Cart Session nicht gesetzt - Keine Artikel im Warenkorb
  $_SESSION['cart'] = array();
  $_SESSION['sum'] = 0;
}
if(isset($_POST['add_item'])){
  $add_id = $_POST['product_id'];
  $title = $_POST['title'];
  $price = $_POST['price'];
  if(isset($_SESSION['cart'][$add_id])){
    echo "Artikel bereits vorhanden!";
  } else {
  $cart_row = array('ID' => $add_id, 'Artikel' => $title ,'Preis' => $price , );
  $_SESSION['cart'][$add_id] = $cart_row;
  $_SESSION['sum'] = $_SESSION['sum'] + $price;
  echo "Artikel erfolgreich hinzugefügt!";
}
}
  //Item entfernen
if (isset ($_POST['delete_item'])){
  $delete_id = $_POST['delete_id'];
  $_SESSION['sum'] = $_SESSION['sum'] - $_SESSION['cart'][$delete_id]['Preis'];
  unset($_SESSION['cart'][$delete_id]);
}

if (isset ($_POST['delete_cart'])){
 unset($_SESSION['cart']);
 $_SESSION['sum'] = 0;
}
 ?>


  <div class="container first-padding bg-black">
  <div class="row">
    <div class="col-sm-8">
      <h1>Artikelübersicht</h1>
      <?php
      if (mysqli_num_rows($shop_item) > 0) {
      while($row = mysqli_fetch_array($shop_item)){?>
        <div class="well well-border" style="background-color: black; color: white;">
          <div class="container-fluid text-left">
            <h4><?php echo $row['title'] ?></h4>
          </div>
          <div class="container-fluid">
      <div class="row">

      <div class="col-sm-4">
      <img src="<?php echo $row['image_link'] ?>" class="img-thumbnail img-responsive" width="300px" height="250px"></img>
      </div>

      <div class="col-sm-6 text-left">
          <table class="table table-condensed" style="color: white; ">
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
            <td>Beschreibung: <br></td><br>
            <td></td>
          </tr>
          <tr>
            <td><?php echo $row['description'] ?></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      </div>

      <div class="col-sm-2">
        <div class="container-fluid" >
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
          <button type"submit" name="add_item" class="btn btn-warning" style="float:right;"><i class="fa fa-cart-plus fa-1x"></i> In den Warenkorb</button>
      </form>
      </div>
    </div>
      <?php  }} ?>
      </div>
    <div class="col-sm-4">
      <h1>Warenkorb</h1>
      <div class="well well-sm bg-black font-white">
      <table class="table" style="color: white;">
        <thead>
        <tr>
          <th>Artikel</th>
          <th>Preis</th>
          <th>Entfernen</th>
        </tr>
      </thead>
      <?php  if(empty($_SESSION['cart'])){ ?>
      <tr>
        <td><p>Keine Artikel im Warenkorb.</p></td>
      </tr>
        <?php } else {
          foreach ($_SESSION['cart'] as $id => $product) {
            ?>
            <tr>
            <td> <?php echo $product['Artikel'] ?> </td>
            <td> <?php echo $product['Preis'] ?> €</td>
            <td> <form method="post" action="" >
              <input type="hidden" name="delete_id" value="<?php echo $product['ID']?>" />
              <button type"submit" name="delete_item" class="btn btn-danger" value="<?php echo $product['ID']?>"><i class="fa fa-times fa-1x"></i></button>
          </form>
            </td>
          </tr>
          <?php  }} ?>
          <br><br>
          <tr>
            <td>  Gesamtsumme: </td>
            <td><?php echo $_SESSION['sum']; ?> €</td>
          </tr>
      </table>
      <div class="container-fluid">
        <div class="row">
      <div class="col-sm-6">
        <form action="" method="post">
      <button type="submit" class="btn btn-danger" name="delete_cart">Warenkorb löschen</button>
    </form>
      </div>
      <div class="col-sm-6">
        <form action="" method="post">
      <button type="submit" class="btn btn-success" name="finish">Zur Kasse</button>
        </form>
    </div>
    </div>
    </div>
  </div>
</div>
</div>
</div>
