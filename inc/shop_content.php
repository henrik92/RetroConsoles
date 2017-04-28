<?php
@session_start();
include "inc/database_connection.php";
$sql = "SELECT * FROM shop";
$shop_item = mysqli_query($conn, $sql);
$cart = $_SESSION['cart'];
 ?>

<div class="intro">
  <h1>Onlineshop</h1>
</div>
<div class="main">
  <div class="shop">
  <div class="shop-cart-box">
    <h1>Warenkorb.</h1></br>
    <table>
      <tr>
      	<th>Artikel</th>
        <th>Preis</th>
        <th>Entf.</th>
        <th>Gesamtpreis</th>
      </tr>
    <?php  if(!isset($cart)){ ?>
    <tr><td><p>Keine Artikel im Warenkorb.</p></td></tr>
    <?php } ?>
    </table>
    <button class="main_button">Zur Kasse</button>
  </div>
  <div class="shop-overview-box">
    <h1>Artikelübersicht.</h1></br>
<?php
if (mysqli_num_rows($shop_item) > 0) {
  while($row = mysqli_fetch_array($shop_item)){?>

    <div class="shop-box">
    <div class="shop-image"><img src="<?php echo $row['image_link'] ?>"></img></div>
    <div class="shop-description">
      <p><u><?php echo $row['title'] ?></u></p>
      <p><?php echo $row['description'] ?></p>
      <p style="color: red; float:right;"><?php echo $row['price'] ?>€</p>
    </div>
    <div class="buttons">
      <form method="post" action="">
        <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>">
        <input type="hidden" name="title" value="<?php echo $row['title'] ?>">
        <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
        <button class="button-warenkorb">In den Warenkorb</button>
  </form>
    </div>
    </div>
<?php  }} ?>
</div>
</div>
</div>

<?php
if (isset ($_POST['submit']) || $_SERVER["REQUEST_METHOD"] == "POST" ) {

}
?>
