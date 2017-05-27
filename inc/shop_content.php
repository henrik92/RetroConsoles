<script type="text/javascript">
/*function checkOffset() {
  var a=$(document).scrollTop()+window.innerHeight;
  var b=$('#nav').offset().bottom;
  if (a<b) {
    $('#cart').css('top', '10px');
  } else {
    $('#cart').css('top', (10+(a+b))+'px');
  }
}*/

/*function checkOffset() {
  var b=$('#nav').offset().top;
  $('#cart').css('top', (b)+'px');

}
$(document).ready(checkOffset);
$(document).scroll(checkOffset);*/

/*$(document).ready(function(){
  var nav_height = $('#nav').outerHeight());
  $('#cart').css("padding-top", nav_height + "px");
  var cart_height = $('#cart').outerHeight());
});*/
</script>

<?php $_SESSION['page'] = "shop";
@session_start();
include "inc/database_connection.php";

if(isset($_POST['search_value']) && !empty(($_POST['search_value']))){
$sql = "SELECT * FROM shop WHERE title LIKE '%".$_POST['search_value']."%'";
} else {
$sql = "SELECT * FROM shop";
}
$shop_item = mysqli_query($conn, $sql);

$_SESSION['sum'];
$empty_cart_err = "";
$nologin_err = "";
//Warenkorb erstellen
if(!isset($_SESSION['cart'])){
  //Shopping Cart Session nicht gesetzt - Keine Artikel im Warenkorb
  $_SESSION['cart'] = array();
  $_SESSION['sum'] = 0;
}
//Artikel hinzufügen
if(isset($_POST['add_item'])){
  $add_id = $_POST['product_id'];
  $title = $_POST['title'];
  $price = $_POST['price'];
  if(isset($_SESSION['cart'][$add_id])){
    $already_in_cart = "Artikel bereits vorhanden!";
  } else {
  $cart_row = array('ID' => $add_id, 'Artikel' => $title ,'Preis' => $price , );
  $_SESSION['cart'][$add_id] = $cart_row;
  $_SESSION['sum'] = $_SESSION['sum'] + $price;
  $added = "Artikel erfolgreich hinzugefügt!";
}
}
//Artikel entfernen
if (isset ($_POST['delete_item'])){
  $delete_id = $_POST['delete_id'];
  $_SESSION['sum'] = $_SESSION['sum'] - $_SESSION['cart'][$delete_id]['Preis'];
  unset($_SESSION['cart'][$delete_id]);
}
//Warenkorb löschen
if (isset ($_POST['delete_cart'])){
 unset($_SESSION['cart']);
 $_SESSION['sum'] = 0;
}

/* ARTIKEL SUCHEN*/
if(isset($_POST['submit_search'])){
  if (isset($_POST['search_value'])){
    $search_value = $_POST['search_value'];
  } else {
    $search_value = "";
  }
}
/* ZUR KASSE */
if(isset($_POST['finish']) && isset($_SESSION['user_id'])){
  if(!empty($_SESSION['cart'])){
  header ("Location: index.php?section=cart_overview");
} else {
  $empty_cart_err = 'Keine Artikel im Warenkorb';
}} else {
  $nologin_err = 'Bitte logge dich zuerst ein!';
}
 ?>

<!-- ############################################################################## -->
<div id="" class="container-fluid first-padding">
  <div class="container text-center" >
    <h4>Warenkorb</h4>
    <table class="table" style="color: white;">
      <thead>
      <tr>
        <th>Artikel</th>
        <th>Preis</th>
        <th>   <form method="post" action="" >
          <button type"submit" name="delete_cart" class="btn btn-danger" value="<?php echo $product['ID']?>"><i class="fa fa-times fa-1x"></i></button>
      </form></th>
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
            <button type"submit" name="delete_item" class="btn btn-danger" value="<?php echo $product['ID']?>"><i class="fa fa-trash-o"></i></button>
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
      <form action="" method="post">
    <button type="submit" class="btn btn-success" name="finish">Zur Kasse</button>
      </form>
      <?php if (isset($_POST['finish'])) {
      if ($nologin_err !== "") {
        echo '<p>'. $nologin_err . '</p>';
      } else if ($empty_cart_err !== ""){
        echo '<p>'. $empty_cart_err . '</p>';
     } else {}} else {}
      ?>
  </div>
  </div>
  </div>
<br>
  <div id="search" class="container bg-black">
      <h3>Artikelsuche</h3>
      <form action="" method="post">
      <input  name="search_value" style="width:50%; padding: 5px;"placeholder="Artikel suchen..."/>
      <button type="submit_search" name="submit_search" class="btn font-black">Suchen</button>
    </form>
    <br>
    </div>

    <div class="container">
      <h3>Artikelübersicht
        <?php
        if (!isset($_POST['search_value']) || $_POST['search_value'] === ""){
          echo '  - Alle Artikel ';
        } else { echo ' - Suchbegriff:  "'. $search_value .'" ';}?></h3>

        <div class="container-fluid">
          <div class="row">
        <?php
      $article_count = 0;
      if (mysqli_num_rows($shop_item) > 0) {
      while($row = mysqli_fetch_array($shop_item)){?>
        <div class="col-sm-6">
        <div id="shop_item" class="well well-sm well-border" style="background-color: black; color: white;">
          <div class="container-fluid text-left">
          <?php $article_count = $article_count+1; echo $article_count; ?><h4><?php echo $row['title'] ?></h4>
          </div>
          <div class="container-fluid">
      <div class="row">

      <div class="col-sm-4">
      <img src="<?php echo $row['image_link'] ?>" class="img-thumbnail img-responsive" width="300px" height="auto"></img>
      </div>

      <div class="col-sm-8 text-left">
<h5><?php echo $row['description'] ?></h5><br>
<h5><?php echo $row['price'] ?> <i class="fa fa-euro"></i></h5>
      <!--    <table class="table table-condensed" style="color: white; ">
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
        <!--  <tr>
            <td>Beschreibung: <br></td><br>
            <td></td>
          </tr>
          <tr>
            <td><?php echo $row['description'] ?></td>
            <td></td>
          </tr>
        </tbody>
      </table>-->
      </div>
    </div>
  </div>
    <hr>
      <div class="container-fluid">
        <form method="post" action="">
          <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>"/>
          <input type="hidden" name="title" value="<?php echo $row['title'] ?>"/>
          <input type="hidden" name="price" value="<?php echo $row['price'] ?>"/>
          <button type"submit" name="add_item" class="btn btn-warning" style="float:center;"><i class="fa fa-cart-plus fa-1x"></i> In den Warenkorb</button>
      </form>
      </div>
    </div>
  </div>
      <?php  }} ?>
      </div>
    </div>
    </div>
