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
<div class="container-fluid">
<div class="jumbotron banner-bot-border">
  <h1>Onlineshop</h1>
</div>
</div>
<div class="container bg-grey container-padding">
  <h1>Warenkorb.</h1></br>
  <div class="well">
  <table class=" table table-striped">
    <tr>
      <th>Artikel</th>
      <th>Preis</th>
      <th>Entf.</th>
      <th>Gesamtpreis</th>
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

<div class="container container-padding">
    <h1>Artikelübersicht.</h1></br>
<?php
if (mysqli_num_rows($shop_item) > 0) {
  while($row = mysqli_fetch_array($shop_item)){?>

    <div class="container">
      <div class="well">
    <div class="row">
      <div class="col-sm-5">
    <img src="<?php echo $row['image_link'] ?>" class="img-thumbnail img-responsive" width="300px" height="250px"></img>
    </div>
    <div class="col-sm-5 text-left">
      <p><u><?php echo $row['title'] ?></u></p>
      <p><?php echo $row['description'] ?></p>
      <p style="color: red; float:right;"><?php echo $row['price'] ?>€</p>
    </div>

    <div class="col-sm-2">
      <form method="post" action="">
        <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>"/>
        <input type="hidden" name="title" value="<?php echo $row['title'] ?>"/>
        <input type="hidden" name="price" value="<?php echo $row['price'] ?>"/>
        <button type"submit" name="add" class="button-warenkorb">In den Warenkorb</button>
      </form>
    </div>
    </div>
    </div>
  </div>
<?php  }} ?>

</div>


<?php
if (isset ($_POST['submit']) || $_SERVER["REQUEST_METHOD"] == "POST" ) {

}
?>
